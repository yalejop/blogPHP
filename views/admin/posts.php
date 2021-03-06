<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog con Platzi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Blog Title</h1>
        </div>    
    </div>
    <div class="row">
    
    <div class="col-md-8">
        <h2>Posts</h2>
        <a class="btn btn-primary" href="<?php echo BASE_URL; ?>admin/posts/create">New Post</a>
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        
            <?php 
            foreach ($blogPosts as $blogPost) {
                echo '<tr>';
                echo '<td>' . $blogPost['title'] . '</td>';
                echo '<td>Edit</td>';
                echo '<td>Delete</td>';
                echo '</tr>';
            }
            
            ?>
        </table>
        </div>
        <div class="col-md-4">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, accusamus labore sunt culpa ea sequi doloremque optio necessitatibus sint placeat impedit, nemo natus consectetur quas error quia, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, accusamus labore sunt culpa ea sequi doloremque optio necessitatibus sint placeat impedit, nemo natus consectetur quas error quia
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
        <footer>
            This is a footer<br>
            <a href="<?php echo BASE_URL; ?>admin">Admin Panel</a>
        </footer>
    </div>
    </div>
</div>
</body>
</html>