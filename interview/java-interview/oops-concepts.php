<?php
// Include config first to get helper functions
require_once '../../includes/config.php';

// Use the base URL from environment
$base_url = get_base_url();

// Page metadata
$page_title = 'OOP Concepts - Java Interview Guide | Full Stack Master';
$page_description = 'Learn about Object-Oriented Programming concepts in Java including Inheritance, Polymorphism, Encapsulation, and Abstraction.';

// Include header and sidebar
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-9 col-lg-9 pt-3 px-lg-4">
    <div class="d-lg-none mb-3">
        <button class="btn btn-primary" data-bs-target="#sidebarOffcanvas" data-bs-toggle="offcanvas">
            <i class="bi bi-list"></i> Menu
        </button>
    </div>

    <article class="tutorial-content">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= $base_url ?>interview/java-interview/">Java Interview</a></li>
                <li class="breadcrumb-item active" aria-current="page">OOP Concepts</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="mb-4">
            <h1 class="display-4 fw-bold text-primary mb-4">Object-Oriented Programming in Java</h1>
            
            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i> Master the four pillars of OOP in Java with detailed explanations and examples.
            </div>
            
            <!-- Class & Object -->
            <section id="class-object" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Class & Object</h2>
                    </div>
                    <div class="card-body">
                        <p>A class is a blueprint for creating objects, while an object is an instance of a class.</p>
                        
                        <div class="code-example mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="h6 mb-0">Example: Class and Object</h4>
                                <button class="btn btn-sm btn-outline-secondary copy-code">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                            <pre><code class="language-java">// Class definition
public class Car {
    // Fields (instance variables)
    String color;
    String model;
    int year;
    
    // Constructor
    public Car(String color, String model, int year) {
        this.color = color;
        this.model = model;
        this.year = year;
    }
    
    // Method
    public void displayInfo() {
        System.out.println("Car: " + model + " (" + year + "), Color: " + color);
    }
}

// Creating objects
public class Main {
    public static void main(String[] args) {
        Car myCar = new Car("Red", "Toyota", 2020);
        myCar.displayInfo(); // Output: Car: Toyota (2020), Color: Red
    }
}</code></pre>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Inheritance -->
            <section id="inheritance" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Inheritance</h2>
                    </div>
                    <div class="card-body">
                        <p>Inheritance allows a class to inherit properties and methods from another class.</p>
                        
                        <div class="code-example mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="h6 mb-0">Example: Inheritance</h4>
                                <button class="btn btn-sm btn-outline-secondary copy-code">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                            <pre><code class="language-java">// Parent class
class Vehicle {
    protected String brand;
    
    public void honk() {
        System.out.println("Honk! Honk!");
    }
}

// Child class inheriting from Vehicle
class Bicycle extends Vehicle {
    private int gearCount;
    
    public Bicycle(String brand, int gearCount) {
        this.brand = brand;  // Inherited field
        this.gearCount = gearCount;
    }
    
    public void ringBell() {
        System.out.println("Ring ring!");
    }
    
    @Override
    public void honk() {
        System.out.println("Bicycle honk!");
    }
}

public class Main {
    public static void main(String[] args) {
        Bicycle myBike = new Bicycle("Trek", 6);
        myBike.honk();      // Inherited method
        myBike.ringBell();  // Own method
    }
}</code></pre>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Polymorphism -->
            <section id="polymorphism" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Polymorphism</h2>
                    </div>
                    <div class="card-body">
                        <p>Polymorphism allows objects of different classes to be treated as objects of a common superclass.</p>
                        <p>There are two types of polymorphism in Java:</p>
                        <ul>
                            <li><strong>Compile-time Polymorphism (Method Overloading)</strong></li>
                            <li><strong>Runtime Polymorphism (Method Overriding)</strong></li>
                        </ul>
                        
                        <div class="code-example mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="h6 mb-0">Example: Polymorphism</h4>
                                <button class="btn btn-sm btn-outline-secondary copy-code">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                            <pre><code class="language-java">// Method Overloading (Compile-time Polymorphism)
class Calculator {
    // Same method name, different parameters
    public int add(int a, int b) {
        return a + b;
    }
    
    public double add(double a, double b) {
        return a + b;
    }
    
    public String add(String a, String b) {
        return a + b;
    }
}

// Method Overriding (Runtime Polymorphism)
class Animal {
    public void makeSound() {
        System.out.println("Animal makes a sound");
    }
}

class Dog extends Animal {
    @Override
    public void makeSound() {
        System.out.println("Dog barks");
    }
}

class Cat extends Animal {
    @Override
    public void makeSound() {
        System.out.println("Cat meows");
    }
}

public class Main {
    public static void main(String[] args) {
        // Method Overloading
        Calculator calc = new Calculator();
        System.out.println(calc.add(5, 3));        // 8
        System.out.println(calc.add(2.5, 3.7));    // 6.2
        System.out.println(calc.add("Hello, ", "World!")); // "Hello, World!"
        
        // Method Overriding
        Animal myAnimal = new Animal();
        Animal myDog = new Dog();
        Animal myCat = new Cat();
        
        myAnimal.makeSound();  // Animal makes a sound
        myDog.makeSound();     // Dog barks
        myCat.makeSound();     // Cat meows
    }
}</code></pre>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Encapsulation -->
            <section id="encapsulation" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Encapsulation</h2>
                    </div>
                    <div class="card-body">
                        <p>Encapsulation is the technique of making the fields in a class private and providing access to them via public methods.</p>
                        
                        <div class="code-example mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="h6 mb-0">Example: Encapsulation</h4>
                                <button class="btn btn-sm btn-outline-secondary copy-code">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                            <pre><code class="language-java">public class BankAccount {
    // Private fields (data hiding)
    private String accountNumber;
    private double balance;
    private String ownerName;
    
    // Public methods to access private fields (getters and setters)
    public String getAccountNumber() {
        return accountNumber;
    }
    
    public void setAccountNumber(String accountNumber) {
        // Validation can be added here
        this.accountNumber = accountNumber;
    }
    
    public double getBalance() {
        return balance;
    }
    
    // Instead of direct setter for balance, provide controlled methods
    public void deposit(double amount) {
        if (amount > 0) {
            balance += amount;
            System.out.println("Deposited: " + amount);
        } else {
            System.out.println("Invalid deposit amount");
        }
    }
    
    public boolean withdraw(double amount) {
        if (amount > 0 && balance >= amount) {
            balance -= amount;
            System.out.println("Withdrawn: " + amount);
            return true;
        } else {
            System.out.println("Insufficient balance or invalid amount");
            return false;
        }
    }
    
    public String getOwnerName() {
        return ownerName;
    }
    
    public void setOwnerName(String ownerName) {
        this.ownerName = ownerName;
    }
}

public class Main {
    public static void main(String[] args) {
        BankAccount account = new BankAccount();
        account.setAccountNumber("123456789");
        account.setOwnerName("John Doe");
        
        account.deposit(1000);  // Valid deposit
        account.withdraw(500);  // Valid withdrawal
        account.withdraw(1000); // Should fail (insufficient balance)
        
        System.out.println("Account balance: " + account.getBalance());
        
        // account.balance = 1000000; // Error: balance is private
    }
}</code></pre>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Abstraction -->
            <section id="abstraction" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Abstraction</h2>
                    </div>
                    <div class="card-body">
                        <p>Abstraction is the concept of hiding the implementation details and showing only the functionality to the user.</p>
                        <p>In Java, abstraction is achieved using abstract classes and interfaces.</p>
                        
                        <div class="code-example mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="h6 mb-0">Example: Abstract Class</h4>
                                <button class="btn btn-sm btn-outline-secondary copy-code">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                            <pre><code class="language-java">// Abstract class
abstract class Shape {
    // Abstract method (no implementation)
    public abstract double calculateArea();
    
    // Concrete method
    public void display() {
        System.out.println("This is a shape with area: " + calculateArea());
    }
}

// Concrete classes
class Circle extends Shape {
    private double radius;
    
    public Circle(double radius) {
        this.radius = radius;
    }
    
    @Override
    public double calculateArea() {
        return Math.PI * radius * radius;
    }
}

class Rectangle extends Shape {
    private double length;
    private double width;
    
    public Rectangle(double length, double width) {
        this.length = length;
        this.width = width;
    }
    
    @Override
    public double calculateArea() {
        return length * width;
    }
}

public class Main {
    public static void main(String[] args) {
        // Shape shape = new Shape(); // Error: Cannot instantiate abstract class
        Shape circle = new Circle(5);
        Shape rectangle = new Rectangle(4, 6);
        
        circle.display();     // Calls Circle's calculateArea()
        rectangle.display();  // Calls Rectangle's calculateArea()
    }
}</code></pre>
                        </div>
                        
                        <div class="code-example mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="h6 mb-0">Example: Interface</h4>
                                <button class="btn btn-sm btn-outline-secondary copy-code">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                            <pre><code class="language-java">// Interface
interface Drawable {
    // Abstract method (implicitly public and abstract)
    void draw();
    
    // Default method (Java 8+)
    default void setColor(String color) {
        System.out.println("Setting color to: " + color);
    }
    
    // Static method (Java 8+)
    static void printInfo() {
        System.out.println("This is a Drawable interface");
    }
}

// Implementing class
class Circle implements Drawable {
    @Override
    public void draw() {
        System.out.println("Drawing a circle");
    }
    
    @Override
    public void setColor(String color) {
        System.out.println("Setting circle color to: " + color);
    }
}

public class Main {
    public static void main(String[] args) {
        Drawable circle = new Circle();
        circle.draw();
        circle.setColor("Red");
        
        // Calling static method on interface
        Drawable.printInfo();
    }
}</code></pre>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Interfaces vs Abstract Classes -->
            <section id="interfaces-abstract" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Interfaces vs Abstract Classes</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Feature</th>
                                        <th>Interface</th>
                                        <th>Abstract Class</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Keyword</td>
                                        <td><code>interface</code></td>
                                        <td><code>abstract class</code></td>
                                    </tr>
                                    <tr>
                                        <td>Variables</td>
                                        <td>Only <code>public static final</code> (constants)</td>
                                        <td>Any type of variables</td>
                                    </tr>
                                    <tr>
                                        <td>Methods</td>
                                        <td>Abstract methods (before Java 8), default and static methods (Java 8+), private methods (Java 9+)</td>
                                        <td>Abstract and concrete methods</td>
                                    </tr>
                                    <tr>
                                        <td>Multiple Inheritance</td>
                                        <td>A class can implement multiple interfaces</td>
                                        <td>A class can extend only one abstract class</td>
                                    </tr>
                                    <tr>
                                        <td>Constructor</td>
                                        <td>No constructor</td>
                                        <td>Can have constructors</td>
                                    </tr>
                                    <tr>
                                        <td>Access Modifiers</td>
                                        <td>Methods are <code>public</code> by default</td>
                                        <td>Can have any access modifier</td>
                                    </tr>
                                    <tr>
                                        <td>When to use</td>
                                        <td>For defining a contract that multiple classes can implement</td>
                                        <td>For sharing code among related classes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Composition vs Aggregation -->
            <section id="composition-aggregation" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Composition vs Aggregation</h2>
                    </div>
                    <div class="card-body">
                        <p>Both composition and aggregation are forms of association in OOP that represent "has-a" relationships, but they differ in their lifecycles.</p>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Composition (Strong "has-a")</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul>
                                            <li>Represents a strong "has-a" relationship</li>
                                            <li>Child object cannot exist independently of the parent</li>
                                            <li>If the parent is destroyed, the child is also destroyed</li>
                                            <li>Example: House - Room (a room cannot exist without a house)</li>
                                        </ul>
                                        
                                        <pre><code class="language-java">// Composition Example
class Engine {
    public void start() {
        System.out.println("Engine started");
    }
}

class Car {
    // Composition: Engine is part-of Car
    private final Engine engine;
    
    public Car() {
        this.engine = new Engine(); // Engine is created when Car is created
    }
    
    public void start() {
        engine.start();
        System.out.println("Car started");
    }
}

public class Main {
    public static void main(String[] args) {
        Car car = new Car();
        car.start();
        // When car is destroyed, engine is also destroyed
    }
}</code></pre>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Aggregation (Weak "has-a")</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul>
                                            <li>Represents a weak "has-a" relationship</li>
                                            <li>Child can exist independently of the parent</li>
                                            <li>If the parent is destroyed, the child can still exist</li>
                                            <li>Example: Department - Professor (a professor can exist without a department)</li>
                                        </ul>
                                        
                                        <pre><code class="language-java">// Aggregation Example
class Professor {
    private String name;
    
    public Professor(String name) {
        this.name = name;
    }
    
    public String getName() {
        return name;
    }
}

class Department {
    private String name;
    private List<Professor> professors;
    
    public Department(String name) {
        this.name = name;
        this.professors = new ArrayList<>();
    }
    
    public void addProfessor(Professor professor) {
        professors.add(professor);
    }
    
    public void listProfessors() {
        System.out.println("Professors in " + name + ":");
        for (Professor p : professors) {
            System.out.println("- " + p.getName());
        }
    }
}

public class Main {
    public static void main(String[] args) {
        // Professor can exist independently
        Professor prof1 = new Professor("Dr. Smith");
        Professor prof2 = new Professor("Dr. Johnson");
        
        Department csDept = new Department("Computer Science");
        csDept.addProfessor(prof1);
        csDept.addProfessor(prof2);
        
        csDept.listProfessors();
        
        // Even if department is destroyed, professors still exist
    }
}</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Method Overloading & Overriding -->
            <section id="method-overloading-overriding" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Method Overloading vs Method Overriding</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Feature</th>
                                        <th>Method Overloading</th>
                                        <th>Method Overriding</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Definition</td>
                                        <td>Multiple methods with the same name but different parameters in the same class</td>
                                        <td>Redefining a method in a child class that is already defined in the parent class</td>
                                    </tr>
                                    <tr>
                                        <td>Also known as</td>
                                        <td>Compile-time polymorphism</td>
                                        <td>Runtime polymorphism</td>
                                    </tr>
                                    <tr>
                                        <td>Parameters</td>
                                        <td>Must be different (number, type, or order)</td>
                                        <td>Must be the same as the parent class method</td>
                                    </tr>
                                    <tr>
                                        <td>Return type</td>
                                        <td>Can be same or different</td>
                                        <td>Must be the same or a subtype (covariant return type)</td>
                                    </tr>
                                    <tr>
                                        <td>Access modifier</td>
                                        <td>Can be different</td>
                                        <td>Cannot be more restrictive than the overridden method</td>
                                    </tr>
                                    <tr>
                                        <td>Inheritance</td>
                                        <td>Can be done in the same class</td>
                                        <td>Requires inheritance (parent-child relationship)</td>
                                    </tr>
                                    <tr>
                                        <td>Example</td>
                                        <td><code>void print(int i)</code><br><code>void print(String s)</code></td>
                                        <td><code>Parent: void show()</code><br><code>Child: void show()</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="code-example mt-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="h6 mb-0">Example: Method Overloading vs Overriding</h4>
                                <button class="btn btn-sm btn-outline-secondary copy-code">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                            <pre><code class="language-java">// Parent class
class Animal {
    // Method to be overridden
    public void makeSound() {
        System.out.println("Animal makes a sound");
    }
    
    // Overloaded methods
    public void eat() {
        System.out.println("Animal eats");
    }
    
    public void eat(String food) {
        System.out.println("Animal eats " + food);
    }
    
    public void eat(int times) {
        for (int i = 0; i < times; i++) {
            System.out.println("Animal is eating");
        }
    }
}

// Child class
class Dog extends Animal {
    // Method overriding
    @Override
    public void makeSound() {
        System.out.println("Dog barks");
    }
    
    // Method overloading in child class
    public void eat(boolean isHungry) {
        if (isHungry) {
            System.out.println("Dog is hungry and eats a lot");
        } else {
            System.out.println("Dog is not hungry");
        }
    }
}

public class Main {
    public static void main(String[] args) {
        // Method Overloading Examples
        Animal animal = new Animal();
        animal.eat();           // Animal eats
        animal.eat("grass");    // Animal eats grass
        animal.eat(3);          // Prints "Animal is eating" 3 times
        
        // Method Overriding Example
        Animal myDog = new Dog();
        myDog.makeSound();      // Dog barks (runtime polymorphism)
        
        // Method Overloading in Child Class
        Dog dog = new Dog();
        dog.eat(true);          // Dog is hungry and eats a lot
    }
}</code></pre>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Navigation Buttons -->
            <div class="d-flex justify-content-between mt-4">
                <a href="<?= $base_url ?>interview/java-interview/" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left me-1"></i> Back to Java Interview Guide
                </a>
                <a href="#" class="btn btn-outline-primary">
                    Next: Exception Handling <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </article>
</main>

<!-- Initialize code copy functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize code copy buttons
    document.querySelectorAll('.copy-code').forEach(button => {
        button.addEventListener('click', function() {
            const codeBlock = this.closest('.code-example').querySelector('code');
            const code = codeBlock.textContent;
            
            navigator.clipboard.writeText(code).then(() => {
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="bi bi-check"></i> Copied!';
                setTimeout(() => {
                    this.innerHTML = originalText;
                }, 2000);
            });
        });
    });
    
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>

<?php include_file('includes/footer.php'); ?>
