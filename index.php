<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Pet Shop</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

    <?php

    include 'includes/navbar.inc.php';

    switch ($page) {

        case 'home':
            $heroTitle = "Caring for Pets Starts With Knowledge 🐾";
            $heroText  = "Helpful guides, trusted advice, and useful information for every loving pet owner.";
            $heroImage = "group-pets.jpg";
            break;

        case 'dogs':
            $heroTitle = "Dog Care 🐶";
            $heroText  = "Helpful guides for healthy and active dogs.";
            $heroImage = "dog.webp";
            $showHeroButton = false;
            break;

        case 'cats':
            $heroTitle = "Cat Care 🐱";
            $heroText  = "Everything you need to know about caring for cats.";
            $heroImage = "cat.jpg";
            $showHeroButton = false;
            break;

        case 'small_pets':
            $heroTitle = "Small Pets 🐹";
            $heroText  = "Care tips for rabbits, hamsters, and guinea pigs.";
            $heroImage = "rabbit.webp";
            $showHeroButton = false;
            break;

        case 'nutrition':
            $heroTitle = "Pet Nutrition 🥗";
            $heroText  = " Balanced nutrition is one of the most important parts of pet care. Pets need proper vitamins, proteins, and hydration to maintain healthy growth and energy.";
            $heroImage = "pet_nutrition.jpg";
            $showHeroButton = false;
            break;

        case 'hygiene':
            $heroTitle = "Pet Hygiene 🛁";
            $heroText  = "Good hygiene prevents illness and keeps pets comfortable. Regular cleaning, bathing, and grooming help maintain a healthy living environment.";
            $heroImage = "pet_hygiene.webp";
            $showHeroButton = false;
            break;

        case 'health':
            $heroTitle = "Pet Health ❤️";
            $heroText  = "Regular vet visits and vaccinations are essential for keeping pets healthy. Monitoring behavior and eating habits can help detect health problems early.";
            $heroImage = "pet_health.jpg";
            $showHeroButton = false;
            break;

        case 'exercise':
            $heroTitle = "Pet Exercise 🎾";
            $heroText  = "Exercise keeps pets physically fit and mentally active. Activities such as walks, games, and climbing help reduce stress and improve overall wellbeing.";
            $heroImage = "pet_exercise.jpg";
            $showHeroButton = false;
            break;

        case 'puppy-training':
            $heroTitle = "How to Train a Puppy 🐕";
            $heroText  = "Puppy training should start early using patience and positive reinforcement. Consistency, rewards, and socialization help puppies develop good behavior and confidence.";
            $heroImage = "pet_training.jpg";
            $showHeroButton = false;
            break;

        case 'cat-behavior':
            $heroTitle = "Understanding Cat Behavior 🐈";
            $heroText  = "Cats communicate through body language, sounds and behavior patterns. Understanding signs of stress, comfort and affection helps strengthen the bond with your cat.";
            $heroImage = "cat_behavior.jpg";
            $showHeroButton = false;
            break;

        case 'rabbit-habitat':
            $heroTitle = "Creating a Safe Rabbit Habitat 🐇";
            $heroText  = "Rabbits need spacious, clean, and secure environments. Providing hiding spots, soft bedding, and safe toys helps rabbits feel comfortable and relaxed.";
            $heroImage = "rabbit.webp";
            $showHeroButton = false;
            break;

        case 'articles':
            $heroTitle = "Articles";
            $heroImage = "article.jpg";
            $showHeroButton = false;
            break;

        case 'contact':
            $heroTitle = "Contact?";
            $heroText  = "Want to contact us? Send us an email and we will get back to you as soon as possible.";
            $heroImage = "cat.jpg";
            $showHeroButton = false;
            break;

        case 'about_us';
            $heroTitle = "About Us 🐾";
            $heroText  = " Welcome to our Pet Care Information website. Our goal is to provide clear, reliable, and practical information to help pet owners take better care of their animals. We focus on dogs, cats, rabbits and small pets with easy-to-understand guides.";
            $heroImage = "about_us.webp";
            $showHeroButton = false;
            break;

        case 'faq';
            $heroTitle = "Frequently Asked Questions ❓";
            $heroText  = "Here are some common questions about pet care, along with simple and practical answers.";
            $heroImage = "faq.jpg";
            $showHeroButton = false;
            break;

        default:
            $heroImage = "group-pets.jpg";
            $heroTitle = "";
            $heroText  = "";
            $heroLink  = null;
    }

    $heroClass = ($page === "home") ? "hero-large" : "hero-small";

        include 'PHP/hero.php';

    include 'includes/' . $page . '.inc.php';

    ?>

</div>

</body>
</html>