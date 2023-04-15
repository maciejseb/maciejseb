<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <title>prepare fishcards</title>
</head>
<body>
    <main>
        <form action="subscribe.php" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter set name" />
            </div>

            <div>
                <label for="words to learn">words to learn</label>
				<textarea rows = "50" cols = "60" name = "wordsToLearn">
                
               </textarea>              
            </div>

            <button type="submit">Subscribe</button>
        </form>
    </main>
</body>
</html>