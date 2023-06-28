<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
<script>
    function validateForm() {
        const username = document.getElementById("username").value;
        const address_id = document.getElementById("address_id").value;
        const isBusiness = document.getElementById("isBusiness").value;
        const phone_number = document.getElementById("phone_number").value;
        const business_reg_number = document.getElementById("business_reg_number").value;
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirm-password").value;
        if (username === "" || password === "" || confirmPassword === "" || address_id === "" || isBusiness === "" || phone_number === "" || business_reg_number === "") {
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