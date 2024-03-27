<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Doctor</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="./style/doctors.css">
</head>
<body>
    <?php include ("nav.php"); ?>

    <section>
        <h5>Our Doctors</h5>
        <h2>Meet our Professional Doctors</h2>

        <div class="container doctors__container">
            <article class='doctors__item'>
                <div class="doctors__item-image">
                    <img src="./images/doctd1.PNG" alt="doct1">
                </div>
                <h2>Dr. John Smith</h2>
                <h5>Cardiologist</h5>
            </article>
            <article class='services__item'>
                <div class="services__item-image">
                    <span class="material-symbols-outlined neurolog">neurology</span>
                </div>
                <h2>Neurology</h2>
                <p>
                    Our neurology services focus on the intricate workings 
                    of the nervous system. Our expert neurologists diagnose 
                    and treat a wide range of conditions, from migraines to 
                    neurodegenerative diseases. Trust us for personalized care 
                    and innovative treatments.
                </p>
            </article>
            <article class='services__item'>
                <div class="services__item-image">
                    <span class="material-symbols-outlined orthoped">rheumatology</span>
                </div>
                <h2>Orthopedics</h2>
                <p>
                    Our orthopedic services focus on the diagnosis, 
                    treatment, and prevention of musculoskeletal conditions. 
                    Our expert orthopedic surgeons specialize in bone, joint, 
                    and soft tissue disorders. Whether it’s a sports injury, 
                    arthritis, or fractures, we’re here to restore mobility 
                    and improve your quality of life.
                </p>
            </article>
            <article class='services__item'>
                <div class="services__item-image">
                    <span class="material-symbols-outlined surgi">surgical</span>
                </div>
                <h2>Surgey</h2>
                <p>
                    Our surgery services combine expertise, 
                    precision, and compassionate care. 
                    Our skilled surgical team performs a 
                    wide range of procedures, from minimally
                    invasive surgeries to complex interventions. 
                    Trust us for personalized treatment plans and successful outcomes.
                </p>
            </article>
            <article class='services__item'>
                <div class="services__item-image">
                    <span class="material-symbols-outlined pregnant">pregnancy</span>
                </div>
                <h2>Obstetrics</h2>
                <p>
                Our skilled obstetricians prioritize the health of expectant mothers
                and their unborn babies. From comprehensive prenatal care to monitoring 
                fetal development, we guide you through a healthy pregnancy journey. 
                Trust us for a safe and joyful childbirth experience.
                </p>
            </article>
            <article class='services__item'>
                <div class="services__item-image">
                    <span class="material-symbols-outlined pediatri">child_care</span>
                </div>
                <h2>Pediatrics</h2>
                <p>
                Our pediatrics services focus on the health and well-being of children 
                from infancy through adolescence. Our compassionate pediatricians provide 
                comprehensive care, including preventive check-ups, vaccinations, 
                and guidance for parents. Trust us to nurture healthy futures.
                </p>
            </article>
        </div>
    </section>
</body>
</html>