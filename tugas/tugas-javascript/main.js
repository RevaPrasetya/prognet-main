window.addEventListener("load", function () {
  // Mendapatkan element formnya
  const form = document.querySelector("form.needs-validation");

  form.addEventListener("submit", function (event) {
    // Mencegah form untuk tersubmit terlebih dahulu
    event.preventDefault();

    // Jalankan fungsi Validasi
    const isValid = validateForm();

    // Jika fungsi validateForm() memberikan nilai true, maka isi form sudah valid
    if (isValid) {
      alert("Isi form sudah benar, datanya sudah terkirim (ceritanya)");

      //Kode di bawah berguna untuk lanjut submit sperti biasa
      // form.submit();
    }
  });

  function validateForm() {
    // Melakukan reset ulang tampilan validasi di form
    resetValidationStyles();

    // Variabel sebagai patokan validasi form true atau false
    let isValid = true;

    // Validasi NIM
    const nimInput = document.getElementById('nim');
      if (!nimInput.checkValidity() || !isNumeric(nimInput.value)) {
        isValid = false;
        displayError(nimInput);
      }

    // Validasi First Name
    const firstNameInput = document.getElementById("firstName");
    if (!firstNameInput.checkValidity()) {
      isValid = false;
      displayError(firstNameInput);
    }

    // Validasi Last Name
    const lastNameInput = document.getElementById("lastName");
    if (!lastNameInput.checkValidity()) {
      isValid = false;
      displayError(lastNameInput);
    }

    // Validasi Email
    const emailInput = document.getElementById("email");
    if (!emailInput.checkValidity() || !isValidEmail(emailInput.value)) {
      isValid = false;
      displayError(emailInput);
    }

    // Validasi Address atau Alamat
    const addressInput = document.getElementById("address");
    if (!addressInput.checkValidity()) {
      isValid = false;
      displayError(addressInput);
    }

    // Validasi Faculty
    const facultyInput = document.getElementById("faculty");
    if (!facultyInput.checkValidity()) {
      isValid = false;
      displayError(facultyInput);
    }

    // Validasi Program Studi
    const prodiInput = document.getElementById("prodi");
    if (!prodiInput.checkValidity()) {
      isValid = false;
      displayError(prodiInput);
    }

    // Validasi Username
    const usernameInput = document.getElementById("username");
    if (!usernameInput.checkValidity()) {
      isValid = false;
      displayError(usernameInput);
    }

    //Validasi Password
    const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("confirm_password");

    if (!passwordInput.checkValidity()) {
      isValid = false;
      displayError(passwordInput);
    }

    if (!confirmPasswordInput.checkValidity()) {
      isValid = false;
      displayError(confirmPasswordInput);
    }

    if (passwordInput.value !== confirmPasswordInput.value) {
      // Apabila password dan konfirmasi password tidak sama
      isValid = false;
      displayError(passwordInput);
      displayError(confirmPasswordInput);
      alert("Password dan Konfirmasi Password tidak sama.");
    }

    // Memberikan nilai validasi yang baru saja dilakukan, jika false maka proses submit tidak akan berjalan
    return isValid;
  }

  function isValidEmail(email) {
    //Menggunakan Regex untuk melakukan validasi email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  function isNumeric(value) {
    //Untuk mengecek apabila benar nilainya berupa angka
    return /^\d+$/.test(value);
  }

  function resetValidationStyles() {
    //Mengapus kelas "is-invalid"
    const invalidControls = document.querySelectorAll(".is-invalid");
    invalidControls.forEach((control) => {
      control.classList.remove("is-invalid");
    });
  }

  function displayError(inputElement) {
    //Menambahkan kelas "is-invalid" apabila terjadi error pada input
    inputElement.classList.add("is-invalid");
  }
});
