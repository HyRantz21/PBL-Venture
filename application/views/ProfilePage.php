<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
    }

    .sidebar {
        width: 250px;
        background-color: #fff;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .profile {
        text-align: center;
    }

    .profile img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }

    .profile h2 {
        margin: 10px 0 5px;
    }

    .profile p {
        margin: 0;
        color: #888;
    }
    .main-content {
        flex-grow: 1;
        padding: 40px;
        background-color: #fff;
    }

    .main-content h1 {
        margin-top: 0;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="date"] {
        width: calc(100% - 22px);
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .phone-input {
        display: flex;
        gap: 10px;
    }

    .phone-input select,
    .phone-input input {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .gender-options {
        display: flex;
        gap: 20px;
    }

    .gender-options label {
        display: flex;
        align-items: center;
    }

    .gender-options input[type="radio"] {
        margin-right: 5px;
    }

    .form-actions {
        display: flex;
        gap: 10px;
    }

    .save-btn,
    .cancel-btn {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .save-btn {
        background-color: #007bff;
        color: #fff;
    }

    .cancel-btn {
        background-color: #6c757d;
        color: #fff;
    }

</style>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <img src="profile.jpg" alt="Profile Picture">
                <h2>Denis Holland</h2>
            </div>
        </div>
        <div class="main-content">
            <h1>Personal Information</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <form action="#">
                <div class="form-group">
                    <label for="first-name">First name</label>
                    <input type="text" id="first-name" name="first-name" value="Denis">
                </div>
                <div class="form-group">
                    <label for="last-name">Last name</label>
                    <input type="text" id="last-name" name="last-name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="denis.holland@company.com">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <div class="phone-input">
                        <input type="text" id="phone" name="phone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <div class="gender-options">
                        <label>
                            <input type="radio" name="gender" value="male" checked>
                            <span>Male</span>
                        </label>
                        <label>
                            <input type="radio" name="gender" value="female">
                            <span>Female</span>
                        </label>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="save-btn">Save</button>
                    <button type="button" class="cancel-btn">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
