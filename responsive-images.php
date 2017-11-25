<!DOCTYPE html>
<html>
    <head>
        <title>Responsive Images - CSS Grid Layout</title>
        <meta name="keywords" content="">
        <meta name ="descrption" content="">
        <?php require_once('includes/metadata.php'); ?>
    </head>
    <?php require_once('includes/header.php'); ?>
        <article id="content">
            <picture>
                <!-- desktop -->
                <source srcset="/images/desktop_stepBro.jpg" media="(min-width:64.063em)" alt="step brothers meme">
                <!-- tablet -->
                <source srcset="/images/tablet_stepBro.jpg" media="(min-width:40.063em)" alt="step brothers meme">
                <!-- phone -->
                <source srcset="/images/phone_stepBro.jpg" alt="step brothers meme">
                <!-- non compliant browsers -->
                <img src="/images/IE_stepBro.jpg" alt="step brothers meme">
            </picture>
            <h1>Responsive Images</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hoc non est positum in nostra actione. <a href='http://loripsum.net/' target='_blank'>Sed nimis multa.</a> Omnia contraria, quos etiam insanos esse vultis. <mark>Id Sextilius factum negabat.</mark> Duo Reges: constructio interrete. Quid enim est a Chrysippo praetermissum in Stoicis? <i>Respondeat totidem verbis.</i> Itaque contra est, ac dicitis; Illis videtur, qui illud non dubitant bonum dicere -; </p>

            <p><a href='http://loripsum.net/' target='_blank'>Aliter autem vobis placet.</a> Istam voluptatem perpetuam quis potest praestare sapienti? Varietates autem iniurasque fortunae facile veteres philosophorum praeceptis instituta vita superabat. Sapientem locupletat ipsa natura, cuius divitias Epicurus parabiles esse docuit. <a href='http://loripsum.net/' target='_blank'>Quod equidem non reprehendo;</a> Isto modo ne improbos quidem, si essent boni viri. </p>

            <p>Quamquam id quidem licebit iis existimare, qui legerint. Duae sunt enim res quoque, ne tu verba solum putes. Certe nihil nisi quod possit ipsum propter se iure laudari. Nonne videmus quanta perturbatio rerum omnium consequatur, quanta confusio? Sin laboramus, quis est, qui alienae modum statuat industriae? Quodsi ipsam honestatem undique pertectam atque absolutam. An ea, quae per vinitorem antea consequebatur, per se ipsa curabit? Et quod est munus, quod opus sapientiae? </p>

            <blockquote cite='http://loripsum.net'>
            	Varietates autem iniurasque fortunae facile veteres philosophorum praeceptis instituta vita superabat.
            </blockquote>

            <h2>Inde igitur, inquit, ordiendum est.</h2>

            <p>Quod non faceret, si in voluptate summum bonum poneret. <b>At eum nihili facit;</b> <mark>Quid igitur, inquit, eos responsuros putas?</mark> Nihil enim iam habes, quod ad corpus referas; Videsne, ut haec concinant? Ratio enim nostra consentit, pugnat oratio. Sine ea igitur iucunde negat posse se vivere? <a href='http://loripsum.net/' target='_blank'>Sic enim censent, oportunitatis esse beate vivere.</a> </p>

            <ul>
            	<li>Quae dici eadem de ceteris virtutibus possunt, quarum omnium fundamenta vos in voluptate tamquam in aqua ponitis.</li>
            	<li>Quem si tenueris, non modo meum Ciceronem, sed etiam me ipsum abducas licebit.</li>
            	<li>Nos paucis ad haec additis finem faciamus aliquando;</li>
            	<li>Aliter homines, aliter philosophos loqui putas oportere?</li>
            </ul>

            <pre>
            Sin autem eos non probabat, quid attinuit cum iis, quibuscum
            re concinebat, verbis discrepare?

            Sed quid minus probandum quam esse aliquem beatum nec satis
            beatum?
            </pre>

            <p><a href='http://loripsum.net/' target='_blank'>Venit ad extremum;</a> Huic mori optimum esse propter desperationem sapientiae, illi propter spem vivere. Videamus animi partes, quarum est conspectus illustrior; Restinguet citius, si ardentem acceperit. <i>An eiusdem modi?</i> Neminem videbis ita laudatum, ut artifex callidus comparandarum voluptatum diceretur. </p>
        </article>
        <aside id="sideBar">
            <h2>Quid ad utilitatem tantae pecuniae?</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Primum quid tu dicis breve? Immo videri fortasse. Age, inquies, ista parva sunt. Suo genere perveniant ad extremum; Duo Reges: constructio interrete. Collige omnia, quae soletis: Praesidium amicorum. </p>

            <p>Negare non possum. Sed ille, ut dixi, vitiose. Omnia peccata paria dicitis. Hoc est non dividere, sed frangere. Quare conare, quaeso. Is es profecto tu. </p>

            <ul>
            	<li>Sed quid minus probandum quam esse aliquem beatum nec satis beatum?</li>
            	<li>Ita fit beatae vitae domina fortuna, quam Epicurus ait exiguam intervenire sapienti.</li>
            	<li>At ille non pertimuit saneque fidenter: Istis quidem ipsis verbis, inquit;</li>
            	<li>Memini me adesse P.</li>
            </ul>
        </aside>
        <?php require_once('includes/footer.php'); ?>
    </body>
</html>
