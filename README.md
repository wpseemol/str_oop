## String file output

string_to_vowels_count is php function

### Input

string_to_vowels_count argument array

```
$string = ["hello", "word", "PHP", "Programming"];
string_to_vowels_count($string);
```

### Output

Original String: hello, Vowel Count: 2, Reversed String: olleh <br />
Original String: word, Vowel Count: 1, Reversed String: drow <br />
Original String: PHP, Vowel Count: 0, Reversed String: PHP <br />
Original String: Programming, Vowel Count: 3, Reversed String: gnimmargorP

<hr />
<br />

## Opp file output

Opp file is php file inside ths opp file have two
php object Book and Member.

Book object is store book name and book copy

### Input

```
new Book("The Great Gatsby", 5);
```

first argument "book name" and second argument "books copy "

```
$memberJohn = new Member("John Doe");
$memberJohn->borrowBook($book1);
```

Member object first argument member name and,<br />
member object borrowBook Method argument is book name;

```
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);
echo "Available Copies of \n";

echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopy() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopy() . "\n";

$memberJohn = new Member("John Doe");
$memberJane = new Member("Jane Smith");

$memberJohn->borrowBook($book1);
$memberJane->borrowBook($book2);


echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopy() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopy() . "\n";

$memberJane->returnBook($book2);

echo "after return \n";

echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopy() . "\n";
```

### Output

Available Copies of <br />
Available Copies of 'The Great Gatsby': 5 <br />
Available Copies of 'To Kill a Mockingbird': 3 <br />
John Doe successfully borrowed 'The Great Gatsby'. <br />
Jane Smith successfully borrowed 'To Kill a Mockingbird'. <br />
Available Copies of 'The Great Gatsby': 4 <br />
Available Copies of 'To Kill a Mockingbird': 2 <br />
Jane Smith returned 'To Kill a Mockingbird'.<br />
after return<br />
Available Copies of 'To Kill a Mockingbird': 3
