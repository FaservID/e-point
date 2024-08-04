(function () {
    "use strict";

    let forms = document.querySelectorAll(".php-email-form");

    forms.forEach(function (e) {
        e.addEventListener("submit", function (event) {
            event.preventDefault(); // Pastikan ini dipanggil di awal

            let thisForm = this;
            let recaptcha = thisForm.getAttribute("data-recaptcha-site-key");
            let nisn = thisForm.querySelector('input[name="nisn"]').value;

            // Show loading message
            thisForm.querySelector(".loading").classList.add("d-block");
            thisForm
                .querySelector(".error-message")
                .classList.remove("d-block");
            thisForm.querySelector(".box-message").classList.remove("d-block");

            let formData = new FormData(thisForm);

            if (recaptcha) {
                if (typeof grecaptcha !== "undefined") {
                    grecaptcha.ready(function () {
                        try {
                            grecaptcha
                                .execute(recaptcha, {
                                    action: "php_email_form_submit",
                                })
                                .then((token) => {
                                    formData.set("recaptcha-response", token);
                                    submitForm(thisForm, formData, nisn);
                                });
                        } catch (error) {
                            displayError(thisForm, error);
                        }
                    });
                } else {
                    displayError(
                        thisForm,
                        "The reCaptcha javascript API url is not loaded!"
                    );
                }
            } else {
                submitForm(thisForm, formData, nisn);
            }
        });
    });

    function submitForm(thisForm, formData, nisn) {
        fetch("/track-pelanggaran", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN":
                    document.querySelector("input[name=_token]").value,
                "X-Requested-With": "XMLHttpRequest",
            },
            body: JSON.stringify({ nisn: nisn }),
        })
            .then((response) => {
                if (response.ok) {
                    return response.json();
                } else {
                    throw new Error(
                        `${response.status} ${response.statusText} ${response.url}`
                    );
                }
            })
            .then((data) => {
                thisForm.querySelector(".loading").classList.remove("d-block");
                if (data.status === 200) {
                    var student = data.student;
                    // Periksa apakah nama siswa valid
                    if (student !==null) {
                        var studentInfo = `
                            <p class="text-dark">
                            Nama Siswa : ${student.nama}<br>
                            NISN : ${student.nisn}<br>
                            Kelas : ${student.kelas.nama_kelas}
                            </p>
                        `;
                        // Buat tabel
                        var tableHtml =
                            '<table class="table table-bordered"><thead class="thead-light text-center"><tr><th>No</th><th>Nama Pelanggaran</th><th>Poin</th><th>Tanggal</th></tr></thead><tbody>';

                        if (data.data.length > 0) {
                            // Jika ada pelanggaran, tambahkan ke tbody
                            data.data.forEach((pelanggaran, index) => {
                                var createdAt = new Date(
                                    pelanggaran.created_at
                                );
                                var formattedDate =
                                    createdAt.toLocaleDateString("id-ID", {
                                        day: "2-digit",
                                        month: "long",
                                        year: "numeric",
                                    });
                                tableHtml += `<tr class="fw-normal"><td class="text-center">${index + 1}</td><td>${
                                    pelanggaran.kategori.kategori_pelanggaran
                                }</td><td class="text-center">${
                                    pelanggaran.kategori.poin
                                } Poin</td><td class="text-center">${formattedDate}</td></tr>`;
                            });
                        } else {
                            // Jika tidak ada pelanggaran, tampilkan pesan di dalam tbody
                            tableHtml +=
                                '<tr><td colspan="4" class="text-center text-dark">Belum ada pelanggaran</td></tr>';
                        }

                        tableHtml += "</tbody></table>";
                        thisForm.querySelector(".box-message").innerHTML =
                            studentInfo + tableHtml;
                        thisForm
                            .querySelector(".box-message")
                            .classList.add("d-block"); // Pastikan box-message ditampilkan
                    } else {
                        // Menampilkan pesan jika nama siswa tidak valid
                        thisForm.querySelector(".error-message").innerHTML =
                            '<p class="text-center">Data siswa tidak ditemukan.</p>';
                        thisForm
                            .querySelector(".error-message")
                            .classList.add("d-block");
                        thisForm.querySelector(".box-message").innerHTML = ""; // Kosongkan box-message
                        thisForm
                            .querySelector(".box-message")
                            .classList.remove("d-block"); // Sembunyikan box-message
                    }

                    thisForm
                        .querySelector(".box-message")
                        .classList.add("d-block");
                    thisForm.reset();
                } else {
                    // Menangani kesalahan lain
                    thisForm.querySelector(".error-message").innerHTML =
                        data.message
                            ? data.message
                            : "Terjadi kesalahan saat mengambil data.";
                    thisForm
                        .querySelector(".error-message")
                        .classList.add("d-block");
                }
            })
            .catch((error) => {
                displayError(thisForm, error);
            });
    }

    function displayError(thisForm, error) {
        thisForm.querySelector(".loading").classList.remove("d-block");
        thisForm.querySelector(".error-message").innerHTML = error;
        thisForm.querySelector(".error-message").classList.add("d-block");
    }
})();
