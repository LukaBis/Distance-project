<html>
<body>

    <p>Minimum number of changes required is:
        <?php echo levenshtein($_POST["str1"], $_POST["str2"]); ?>
    </p>

</body>
</html>
