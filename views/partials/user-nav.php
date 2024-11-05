<section id="content">
	<nav>
		<i class='bx bx-menu'></i>
		<!-- <a href="#" class="nav-link">Categories</a> -->
		<form action="/users/search-gyms" method="GET">
			<div class="form-input">
				<input type="search" name="gymName" placeholder="Search nearby gym">
				<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
			</div>
		</form>
<?php
/*
		{{!-- <input type="checkbox" id="switch-mode" hidden>
		<label for="switch-mode" class="switch-mode"></label>
		<a href="#" class="notification">
			<i class='bx bxs-bell'></i>
			<span class="num">8</span>
		</a>
		<a href="#" class="profile">
			<img src="/public/images/user3.jpeg">
		</a> --}}
		*/
?>
		<div class="profile-icon" id="initialsPlaceholder"></div>


	</nav>
</section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var initialsPlaceholder = document.getElementById("initialsPlaceholder");
            var fullName = "{{name}}"; // Replace with the actual name passed from the backend
            if (fullName) {
                var nameParts = fullName.split(" ");
                var firstNameInitial = nameParts[0].charAt(0).toUpperCase();
                var surnameInitial = nameParts[1].charAt(0).toUpperCase();

                var initials = firstNameInitial + surnameInitial;
                initialsPlaceholder.textContent = initials;
            }
        });

    </script>