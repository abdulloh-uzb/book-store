<x-frontend-layout>

    <!-- Team Details Section Start -->
    <section class="team-details-section fix section-padding">
        <div class="container">
            <div class="team-details-wrapper">
                <div class="team-details-items">
                    <div class="details-image wow fadeInUp" data-wow-delay=".3s">
                        <img src="/assets/img/team/details.png" alt="img">
                    </div>
                    <div class="details-content wow fadeInUp" data-wow-delay=".5s">
                        <h3>Foydalanuvchi: {{ $user->username }}</h3>
                        <div class="social-icon d-flex align-items-center">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-frontend-layout>




