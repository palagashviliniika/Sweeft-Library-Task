<?php
require "classes/booksView.php";
require "classes/booksContr.php";
require "classes/validator.php";
require "classes/filter.class.php";

//instantiating view class
$results = new BooksView();

//fetching all authors
$authors = $results->getAuthors();
$titles = $results->getTitles();

//filtering authors for filter input
$authorsFilterClass = new Filter($authors);
$uniqReindexedAuthors = $authorsFilterClass->filterAuthors();

//checking if delete button is clicked
if (isset($_POST['delete-btn'])){
    $delete = new BooksController($_POST);
    $delete->deleteBooks();
}

//checking if search and filter button is clicked
if (isset($_POST['filter-btn'])){
    $books = $results->getFilteredBooks($_POST['author-filter'], $_POST['search']);

} else {
    //fetching all books
    $books = $results->getBooks();
}
?>

<?php include "includes/header.php";?>

<div class="search-filter">
    <div class="filter">
        <form action="index.php" method="post" id="filter-form">

            <input type="search" id="search" name="search" placeholder="საძიებო დასახელება" class="input">

            <select name="author-filter" id="author-filter" class="input">
                <option value="*">ყველა ავტორი</option>
                <?php for ($i=0;$i<sizeof($uniqReindexedAuthors);$i++){ ?>
                <option value="<?php echo $results->showSingleAuthor($uniqReindexedAuthors, $i)?>"><?php echo $results->showSingleAuthor($uniqReindexedAuthors, $i)?></option>
                <?php } ?>
            </select>

            <input type="submit" id="filter-btn" name="filter-btn" value="გაფილტვრა და მოძებნა">

        </form>
    </div>
</div>

<div class="popular3">
    <div class="container_popular3">

        <div class="headline">
            popular posts
        </div>

        <form action="index.php" id="delete-form" method="post">

        <div class="container second">

            <?php foreach ($books as $book){ ?>

            <div class='post'>

                <div class='img' style='background-image: url("images/default.jpg")'>
                    <div class="actions">
                        <input type="checkbox" class="delete-checkbox" name="delete-checkbox[]" value="<?php $results->showID($book); ?>">
                        <button class="edit-btn" disabled>
                            <a href="edit.php?id=<?php echo $book['id'];?>" class="edit-link">
                                Edit
                            </a>
                        </button>
                    </div>
                </div>

                <div class='popular_description'>
                    <h3 class='h3_art'>
                        <a href='' class='popular_article'>
                            <?php $results->showTitle($book); ?>
                        </a>
                    </h3>
                    <div class='popular_subtitle'>
                        <div class='fa fa-star'></div>
                        <a class='popular_subtext'><?php $results->showAuthor($book); ?> - <?php $results->showRelDate($book); ?> </a>
                    </div>

                    <div class='popular_subtitle second'>
                        <div class='fa fa-heart'id='icon'></div>
                        <a class='like_subtext'><?php $results->showStatus($book); ?></a>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>

        </form>

    </div>
</div>

<?php include "includes/footer.php";?>

</body>
</html>

</body>
</html>