<div class="container">
    <div class="row">
        <form action="traitement_create.php" class="col-6 m-auto" method="post" enctype="multipart/form-data">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" class="form-control mb-4" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control mb-4" required>
            <label for="birth">Birth Date</label>
            <input type="date" name="birth" class="form-control mb-4" id="birth" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="mb-4 form-control" required>
            <label for="city">City</label>
            <input type="text" name="city" id="city" class="form-control mb-4" required>
            <label for="picture">Profile picture</label>
            <input type="file" name="picture" id="picture" class="form-control mb-4">
            <button type="submit" class="btn btn-success">Sign up</button>
            <br>
            <a href="modal.php?p=index">Already have an account?</a>
        </form>
    </div>
</div>