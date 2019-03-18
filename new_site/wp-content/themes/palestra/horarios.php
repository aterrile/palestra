<?php
/**
 * Template Name: Horarios
 *
 */


get_header(); 

while( have_posts() ) : the_post();
?>

<section id="horarios"> 
    <div class="section_header">
        <img src="<?php bloginfo('template_url') ?>/img/bg_horarios.jpg" class="heading">
        <h2> Clases y Horarios </h2>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th> Lun<span class="hidden-xs">es</span> </th>
                    <th> mar<span class="hidden-xs">tes</span> </th>
                    <th> mie<span class="hidden-xs">rcoles</span> </th>
                    <th> Jue<span class="hidden-xs">ves</span> </th>
                    <th> Vie<span class="hidden-xs">rnes</span> </th>
                    <th> Sab<span class="hidden-xs">ado</span> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Kco <br>
                            8:00 am / 9:00 am
                        </div>
                    </td>
                    <td> 
                        <div class="inner">
                            <strong class="trx">trx</strong> 
                            Manuel <br>
                            8:00 am / 9:00 am
                        </div>
                    </td>
                    <td> 
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Carolina <br>
                            8:00 am / 9:00 am
                        </div>
                    </td>
                    <td> 
                        <div class="inner">
                            <strong class="trx">trx</strong> 
                            Manuel <br>
                            8:00 am / 9:00 am
                        </div>
                    </td>
                    <td> 
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Kco <br>
                            8:00 am / 9:00 am
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="inner">
                            <strong class="yoga">Yoga</strong> 
                            Ma. Eugenia <br>
                            9:00 am / 10:00 am
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="pump">body pump</strong> 
                            Manuel <br>
                            9:00 am / 10:00 am
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="yoga">Yoga</strong> 
                            Carolina <br>
                            9:00 am / 10:00 am
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="pump">body pump</strong> 
                            Manuel <br>
                            9:00 am / 10:00 am
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="yoga">Yoga</strong> 
                            Kco <br>
                            9:00 am / 10:00 am
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="inner">
                            <strong class="step">Step</strong> 
                            Ma. Eugenia <br>
                            10:00 am / 11:00 am
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="baile">baile</strong> 
                            Manuel <br>
                            10:00 am / 11:00 am
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">ciclismo indoor</strong> 
                            Carolina <br>
                            10:00 am / 11:00 am
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="baile">baile</strong> 
                            Manuel <br>
                            10:00 am / 11:00 am
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="inner">
                            <strong class="baile">baile</strong> 
                            Ma. Eugenia <br>
                            11:00 am / 12:00 pm
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">ciclismo indoor</strong> 
                            Manuel <br>
                            11:00 am / 12:00 pm
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="baile">baile</strong> 
                            Carolina <br>
                            11:00 am / 12:00 pm
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">ciclismo indoor</strong> 
                            manuel<br>
                            11:00 am / 12:00 pm
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="baile">Baile</strong> 
                            Kco<br>
                            11:00 am / 12:00 pm
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="baile">Baile</strong> 
                            Kco<br>
                            11:00 am / 12:00 pm
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Kco<br>
                            12:00 pm / 1:00 pm
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Kco<br>
                            5:00 pm / 6:00 pm
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="inner">
                            <strong class="trx">trx</strong> 
                            Ma. Eugenia<br>
                            6:30 pm / 7:30 pm
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div class="inner">
                            <strong class="cardio">cardio box</strong> 
                            Carolina<br>
                            6:30 pm / 7:30 pm
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Ma. Eugenia<br>
                            7:00 pm / 8:00 pm
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Manuel<br>
                            7:00 pm / 8:00 pm
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Carolina<br>
                            7:00 pm / 8:00 pm
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Manuel<br>
                            7:00 pm / 8:00 pm
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Kco<br>
                            7:00 pm / 8:00 pm
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Kco<br>
                            7:00 pm / 8:00 pm
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="inner">
                            <strong class="pump">body Pump</strong> 
                            Ma. Eugenia<br>
                            7:30 pm / 8:30 pm
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div class="inner">
                            <strong class="baile">baile</strong> 
                            Carolina<br>
                            7:30 pm / 8:30 pm
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Ma. Eugenia<br>
                            8:00 pm / 9:00 pm
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Manuel<br>
                            8:00 pm / 9:00 pm
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Carolina<br>
                            8:00 pm / 9:00 pm
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo Indoor</strong> 
                            Manuel<br>
                            8:00 pm / 9:00 pm
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="inner">
                            <strong class="baile">Baile</strong> 
                            Ma. Eugenia<br>
                            8:30 pm / 9:30 pm
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div class="inner">
                            <strong class="trx">trx</strong> 
                            Carolina<br>
                            8:30 pm / 9:30 pm
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo indoor</strong> 
                            Ma. Eugenia<br>
                            9:00 pm / 10:00 pm
                        </div>
                    </td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo indoor</strong> 
                            Manuel<br>
                            9:00 pm / 10:00 pm
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div class="inner">
                            <strong class="ciclismo">Ciclismo indoor</strong> 
                            Manuel<br>
                            9:00 pm / 10:00 pm
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

</section>
    
<?php 
endwhile;
get_footer(); 
?>
