<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
<script>
    function validateForm() {
        const username = document.getElementById("username").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirm-password").value;
        if (username === "" || email === "" || password === "" || confirmPassword === "") {
            alert("Please fill in all fields");
            return false;
        }
        if (password !== confirmPassword) {
            alert("Passwords do not match");
            return false;
        }
        return true;
    }
</script>
</body>
</html>