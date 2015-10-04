<html>
<head>
  <title>Lol PHP</title>
</head>
<body>

  <p>
    <?php
    // Write your function below!
    function displayName() {
        echo "David";
    }

    displayName();
    ?>

    <p>
      <?php
      function aboutMe($name, $age) {
          echo "Hello! My name is $name, and I am $age years old.";
      }

      aboutMe("David", 22);
      ?>
    </p>

    <p>
      <?php
        // The code below creates the class
        class Person {
            // Creating some properties (variables tied to an object)
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;

            // Assigning the values
            public function __construct($firstname, $lastname, $age) {
              $this->firstname = $firstname;
              $this->lastname = $lastname;
              $this->age = $age;
            }

            // Creating a method (function tied to an object)
            public function greet() {
              return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
            }
          }

        // Creating a new person called "boring 12345", who is 12345 years old ;-)
        $me = new Person('boring', '12345', 12345);

        // Printing out, what the greet method returns
        echo $me->greet();
        ?>
        </p>

        <p>
          <?php
            class King {
              // Modify the code on line 10...
              public static function proclaim() {
                echo "A kingly proclamation!";
              }
            }
            // ...and call the method below!
            King::proclaim();
          ?>
        </p>
  </p>

</body>
</html>