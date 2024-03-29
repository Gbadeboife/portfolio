<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ifedayo Gbadebo</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/22950278df.js" crossorigin="anonymous"></script>
</head>
<body>


    <?php
    if(!empty($_POST["send"])) {
        $userName = $_POST["name"];
      $userEmail = $_POST["email"];
        $userPhone = $_POST["phone"];
        $userMessage = $_POST["message"];
        $toEmail = "gbadeboifedayo@gmail.com";
      
        $mailHeaders = "Name: " . $userName .
        "\r\n Email: ". $userEmail  . 
        "\r\n Phone: ". $userPhone  . 
        "\r\n Message: " . $userMessage . "\r\n";
    
        if(mail($toEmail, $userName, $mailHeaders)) {
            $message = "Your contact information is received successfully.";
        }
    }
    ?>
    


    <header>
        <div class="logo">
            <img src="images/logo-img.jpg" alt="logo image">
            <h1>Ifedayo</h1>
        </div>
        <nav class="header-nav">
            <ul>
                <li><a href="#about" class="link">About</a></li>
                <li><a href="#projects" class="link">Projects</a></li>
                <li><a href="#writing" class="link">Writing</a></li>
                <li class="cont-link"><a href="#contact" class="link">Contact</a></li>
            </ul>
        </nav>
        <button class="nav-btn" onclick="toggleMenu()">
            <i class="fa-solid fa-bars"></i>
            <i class="fa-solid fa-xmark"></i>
        </button>
        
    </header>
    <main>
        <section class="landing">
            <article>
                <div class="tagline">
                    <h1>FRONTEND DEVELOPER</h1>
                </div>
                <div class="info">
                    <h2><i></i> Hey, I'm Gbadebo Ifedayo</h2>
                    <p>I specialize in solving problems by creating visually stunning websites and transforming ideas
                        into interactive web applications</p>
                </div>
            </article>
            
            <div class="soc-card">
                <a href="https://github.com/Gbadeboife" target="_blank">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/ifedayo-gbadebo-722642269/" target="_blank">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="https://twitter.com/GbadeboIfedayo" target="_blank">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="https://ifedayog.hashnode.dev/" target="_blank">
                    <i class="fa-brands fa-hashnode"></i>
                </a>
                <a href="https://dev.to/gbadeboife" target="_blank">
                    <i class="fa-brands fa-dev"></i>
                </a>
            </div>
        </section>

        <section class="about" id="about">
            <h2>About</h2>
            <article>
                <p>I'm a <span>Frontend Web Developer</span> who has been building projects that tackle problems on the web for the last 3 years.
                     I believe in creating websites that not only function flawlessly but also leave a lasting impression on those who interact with them.
                     Check out some of my works in the <a href="#projects">projects</a> section.</p>
                <p>I also like sharing content on the knowledge i've gained over the years in web development. If you're interested in learning more about
                     the steps I took to construct some past projects, check out the <a href="#writing">writing</a> section. Also feel free to check out my the complete list of articles i've written on <a href="https://dev.to/gbadeboife" target="_blank">dev.to</a>.</p>
                <p>My journey in web development is fueled by my passion for turning ideas into functional, beautiful, and user-friendly <span>websites</span> and <span>web applications</span>. I am open to <span>freelance</span> jobs,
                     don't hesitate to contact me if you have a project in mind.
                </p>
                <a class="abt-cta" href="#contact">Contact me</a>
            </article>
            <div class="skills">
                <h3>My Skills</h3>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>React</li>
                    <li>jQuery</li>
                    <li>GIT</li>
                    <li>GIthub</li>
                    <li>Responsive Design</li>
                </ul>
            </div>
        </section>

        <section class="projects" id="projects">
            <h2>Projects</h3>
                <div class="project-1">
                    <figure class="preview">
                        <img src="images/offize-img.png" alt="">
                    </figure>
                    <article>
                        <h3>Offize</h3>
                        <p>Offize is an e-commerce web app i built from scratch using React, it is used to shop for items and equipment to be used in furnishing a home office.</p>
                        <a href="https://offize.vercel.app/" target="_blank">View live site <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </article>
                </div>

                <div class="project-2">
                    <figure class="preview">
                        <img src="images/conv-img.png" alt="">
                    </figure>
                    <article>
                        <h3>Currency Converter</h3>
                        <p>This is a web app that allows for easy conversion between two any currencies based on present exchange rates.</p>
                        <a href="https://currency-converter-app.vercel.app/" target="_blank">View live site <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </article>
                </div>

                <div class="project-3">
                    <figure class="preview">
                        <img src="images/budg-img.png" alt="">
                    </figure>
                    <article>
                        <h3>Budget Manager</h3>
                        <p>This is a simple budget manager web app i built that allows for tracking of day-to-day expenses.</p>
                        <a href="https://react-budget-manager.vercel.app/" target="_blank">View live site <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </article>
                </div>
        </section>

        <section class="writing" id="writing">
            <h2>Writing</h2>
            <div class="card-1">
                <h4>How to create a Currency Converter app using ExchangeRate REST API</h4>
                <p>A detailed article where i explain the process i used in making my currency converter app. Let's dive into what's possible with REST APIs.</p>
                <span>Dev.to</span>
                <a href="https://dev.to/gbadeboife/how-to-create-a-currency-converter-app-using-exchangerate-rest-api-23bo" target="_blank">Read post</a>
            </div>

            
            <div class="card-2">
                <h4>Exploring lesser-known React hooks and their importance</h4>
                <p>Want to explore the world of React hooks past useState and useEffect? Let's dive into useful hooks that aren't as popular.</p>
                <span>Hashnode</span>
                <a href="https://ifedayog.hashnode.dev/exploring-lesser-known-react-hooks-and-their-importance" target="_blank">Read post</a>
            </div>
            
            <div class="card-3">
                <h4>Ensuring effective cloud security: Best practices and real-world insights</h4>
                <p>As most organizations are storing their data on the cloud, read on the best steps these organizations can take in order to prevent data breaches.</p>
                <span>Dev.to</span>
                <a href="https://dev.to/gbadeboife/ensuring-effective-cloud-security-best-practices-and-real-world-insights-1ang" target="_blank">Read post</a>
            </div>

            <a href="https://ifedayog.hashnode.dev/" target="_blank" class="to-blog">Visit my blog <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </section>

        <section class="testimonials">
            <h2>What my clients say</h2>
            <div class="test-carousel">
                <div class="testimonial">
                    <p>"Working with Ifedayo was a good choice as he exceeded my expectations and delivered a website that suits my brand.
                         He is incredibly talented but what really makes him stand out is his creativity and prof;
                         essionalism. Obviously
                          passionate about the work, I wouldn't hesitate to recommend his services."
                    </p>
                    <aside class="card-info">
                        <img src="images/AO-test-img.jfif" alt="">
                        <h6><span>Oke Ayomide</span><br>CEO of Akankee</h6>
                    </aside>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <h2>Contact</h2>
            <article>
                <h3>Got something in mind?</h3>
                <p>Tell me your ideas and let's create something <span>spectacular!</span></p>
            </article>
            <form name="contact-form" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" required>

                <label for="email">Email</label>
                <input type="email" name="email" required>

                <label for="message">Message</label>
                <textarea name="message" required></textarea>
                
                <input type="submit" value="Submit">

                <?php if (! empty($message)) {?>
                  <div class='success'>
                    <strong><?php echo $message; ?>	</strong>
                    </div>
                <?php } ?>


            </form>
        </section>

        <footer>
            <p><i class="fa-regular fa-copyright"></i> Copyright 2023. Made by <span>Gbadebo Ifedayo</span></p>
        </footer>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    
</body>
</html>


