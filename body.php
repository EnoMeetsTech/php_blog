<div class="container">
<?php
require './pages/header-home.php';
?>
<div class="container-fluid my-3">
<div class="row">
<div class = "col-8">
<div class="row">
    <?php
    for ( $i = 1; $i <=6; $i++) {
        ?>
        <div class="col-4 mt-3">
<div class="card">
  <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/b1b8bcde-f305-41c2-9f1d-15b3ee95604a/ddyvpi2-25d29217-437c-4afa-8abe-49d02d04774f.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2IxYjhiY2RlLWYzMDUtNDFjMi05ZjFkLTE1YjNlZTk1NjA0YVwvZGR5dnBpMi0yNWQyOTIxNy00MzdjLTRhZmEtOGFiZS00OWQwMmQwNDc3NGYuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.EwzZEescftA3RfAM8jVU2s899H4byHgzn63yvMako8A" style="height: 200px; width:100%;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

        <?php
    }
    ?>
    </div>
</div>
<div class="col-4">
    <div class="border p-3">
        <form action="" method="post">
            <div class="form-group">
            <h4>Search</h4>
                <input type="text" name="search" class="form-control" placeholder="Search Item" id="">
            </div>
            <button type="submit" class="btn btn-dark mt-2">Search</button>
        </form>
    </div>

    <div class="border p-3 mt-2">
        <h4>Categories</h4>
        <ul>
            <?php
            for ($i = 1; $i <= 3; $i++) {
                ?>
            <li>
                <a href="#">Links <?php echo $i; ?></a>
            </li>

                <?php
            }
            ?>
        </ul>
    </div>
</div>
</div>
</div>
</div>
</div>
<?php
require './pages/footer-home.php';
?>
</div>