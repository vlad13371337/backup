<?php
get_header();
?>
<section class="hero">
    <div>
        <h1>Paris Creative Agency</h1>
        <p>We craft resonant campaigns that connect luxury, lifestyle, and tech brands with English-speaking audiences in France.</p>
        <a class="cta-button" href="#contact">Plan a Discovery Call</a>
    </div>
    <div>
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large' ); ?>
        <?php else : ?>
            <img src="https://images.unsplash.com/photo-1529101091764-c3526daf38fe?auto=format&fit=crop&w=960&q=80" alt="Creative team collaborating in Parisian studio">
        <?php endif; ?>
    </div>
</section>

<section id="services" class="section">
    <div class="section-inner">
        <h2>What We Do</h2>
        <div class="grid">
            <?php
            $services = [
                [
                    'title'       => 'Brand Positioning',
                    'description' => 'Define a clear brand voice and narrative that resonates with cosmopolitan audiences.',
                ],
                [
                    'title'       => 'Campaign Strategy',
                    'description' => 'Integrated digital and OOH campaigns that amplify your presence across France.',
                ],
                [
                    'title'       => 'Content Production',
                    'description' => 'Art direction, copywriting, and production for high-impact visual storytelling.',
                ],
                [
                    'title'       => 'Performance Marketing',
                    'description' => 'Data-driven optimisation across paid social, search, and programmatic placements.',
                ],
            ];

            foreach ( $services as $service ) :
                ?>
                <article class="card">
                    <h3><?php echo esc_html( $service['title'] ); ?></h3>
                    <p><?php echo esc_html( $service['description'] ); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="portfolio" class="section">
    <div class="section-inner">
        <h2>Recent Collaborations</h2>
        <div class="grid">
            <?php
            $portfolio = [
                [
                    'title'       => 'Maison Lumière',
                    'description' => 'Luxury home fragrance launch campaign across Le Marais boutiques and Eurostar lounges.',
                ],
                [
                    'title'       => 'SeineTech Summit',
                    'description' => 'End-to-end event branding and digital acquisition for a B2B innovation conference.',
                ],
                [
                    'title'       => 'Veló City Bikes',
                    'description' => 'Story-driven social content to expand an eco-conscious brand to Paris expats.',
                ],
            ];

            foreach ( $portfolio as $project ) :
                ?>
                <article class="card">
                    <h3><?php echo esc_html( $project['title'] ); ?></h3>
                    <p><?php echo esc_html( $project['description'] ); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="testimonials" class="section">
    <div class="section-inner">
        <h2>Trusted By Ambitious Teams</h2>
        <div class="testimonials">
            <blockquote class="testimonial">
                <p>“Paris Creative Agency translated our brand into a voice that speaks directly to the international community in Paris.”</p>
                <cite>Amélie Laurent, Founder of Maison Lumière</cite>
            </blockquote>
            <blockquote class="testimonial">
                <p>“From ideation to launch, the team orchestrated a flawless campaign that drove a 35% uplift in qualified leads.”</p>
                <cite>Marc Turner, Marketing Director at SeineTech</cite>
            </blockquote>
            <blockquote class="testimonial">
                <p>“They understand the nuance of communicating in English while honoring French culture. A rare partner.”</p>
                <cite>Luc Moreau, CEO of Veló City</cite>
            </blockquote>
        </div>
    </div>
</section>

<section id="contact" class="section">
    <div class="section-inner">
        <h2>Let’s Create Your Next Campaign</h2>
        <div class="contact-section">
            <p>Tell us about your objectives and we’ll tailor a strategy session from our Paris studio. We typically reply within one business day.</p>
            <div class="contact-details">
                <div>
                    <strong>Email</strong>
                    <a href="mailto:bonjour@pariscreative.agency">bonjour@pariscreative.agency</a>
                </div>
                <div>
                    <strong>Phone</strong>
                    <a href="tel:+33180001234">+33 1 80 00 12 34</a>
                </div>
                <div>
                    <strong>Studio</strong>
                    <span>48 Rue de Rivoli, 75004 Paris</span>
                </div>
                <div>
                    <strong>Hours</strong>
                    <span>Monday – Friday, 9:00 – 18:00 CET</span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
