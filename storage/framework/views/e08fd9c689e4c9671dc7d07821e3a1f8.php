<?php $__env->startSection('title', 'Contact'); ?>

<?php $__env->startSection('content'); ?>
<div class="contact-content">
    <h1>Contact</h1>
    <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in of stuur ons een e-mail op info@smart-solutions.nl. We proberen zo snel mogelijk te reageren!</p>

    <form action="#" class="contact-form">
        <label for="name">Naam</label>
        <input type="text" id="name" name="name" placeholder="Jouw naam">

                <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Jouw email">

                <label for="subject">Onderwerp</label>
        <input type="text" id="subject" name="subject" placeholder="Onderwerp">

                <label for="message">Tekst</label>
        <textarea id="message" name="message" placeholder="Typ hier jouw bericht..."></textarea>

                <button type="submit" class="btn">Verstuur</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smart-solutions\resources\views/contact.blade.php ENDPATH**/ ?>