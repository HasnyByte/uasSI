<script>
    // Ambil referensi elemen
    const loginButton = document.getElementById('loginButton');
    const overlay = document.getElementById('overlay');
    const loginPopup = document.getElementById('loginPopup');
    const registerPopup = document.getElementById('registerPopup');
    const closeLogin = document.getElementById('closeLogin');
    const closeRegister = document.getElementById('closeRegister');
    const showRegister = document.getElementById('showRegister');
    const showLogin = document.getElementById('showLogin');

    // Tampilkan popup login ketika tombol masuk ditekan
    loginButton.addEventListener('click', () => {
        overlay.classList.remove('hidden');
        loginPopup.classList.remove('hidden');
    });

    // Sembunyikan popup login
    closeLogin.addEventListener('click', () => {
        overlay.classList.add('hidden');
        loginPopup.classList.add('hidden');
    });

    // Sembunyikan popup register
    closeRegister.addEventListener('click', () => {
        overlay.classList.add('hidden');
        registerPopup.classList.add('hidden');
    });

    // Ganti dari login ke register
    showRegister.addEventListener('click', () => {
        loginPopup.classList.add('hidden');
        registerPopup.classList.remove('hidden');
    });

    // Ganti dari register ke login
    showLogin.addEventListener('click', () => {
        registerPopup.classList.add('hidden');
        loginPopup.classList.remove('hidden');
    });

    // Juga menutup popup ketika klik di overlay
    overlay.addEventListener('click', () => {
        overlay.classList.add('hidden');
        loginPopup.classList.add('hidden');
        registerPopup.classList.add('hidden');
    });
</script>
