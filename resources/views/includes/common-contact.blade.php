<style>
    .contact-link{
        color:white;
    }
    .contact-link:hover{
        color:lightgoldenrodyellow;
        font-size:22px;
    }
</style>
<section class="contact-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-title">
                    <h2>Contact Me</h2>
                    <p>{{config('contact.statement')}}</p>
                </div>
            </div>
        </div>

        <div class="row mt-80">
            <div class="col-lg-4 col-md-4">
                <div class="contact-box">
                    <h4>{{config('contact.number')}}</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="contact-box">
                    <h4><a href="mailto:{{config('contact.email')}}" class="contact-link">{{config('contact.email')}}</a></h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="contact-box">
                    <h4><a href="https://www.linkedin.com/uas/login" class="contact-link">{{config('contact.third')}}</a></h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="{{asset('assets/documents/resume.docx')}}" class="primary-btn mt-50" data-text="Resume" target="_blank">
                    <span>R</span>
                    <span>e</span>
                    <span>s</span>
                    <span>u</span>
                    <span>m</span>
                    <span>e</span>
                </a>
            </div>
        </div>
    </div>
</section>
