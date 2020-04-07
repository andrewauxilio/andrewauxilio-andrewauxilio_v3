@extends('layouts.main')

@section('head')
    <!-- Styles -->
    <link href="{{ asset('css/resume.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Resume -->
<div class="resume animated fadeIn slow">
    <!-- Download Button-->
    <div class="dl_btn_container mt-3">
        <button class="dl_btn mx-auto">
            <a class="dl_link"
                href="https://docs.google.com/document/d/1WPzmPMmyEtU_zupMPiNBRNrp8PbAzr5pnT0uj61uCpU/edit?usp=sharing"
                target="_blank">Download Resume</a>
        </button>
    </div>

    <!-- Resume Container-->
    <div class="mt-3" id="cv">
        <!-- Resume Header-->
        <div class="mainDetails">
            <div id="headshot">
                <img src="{{ asset('images/avatars/avatar_real.jpg') }}" alt="Andrew Auxilio" />
            </div>
            <div id="name">
                <h1>Andrew Auxilio</h1>
                <h2>Website Developer</h2>
            </div>
            <div id="contactDetails">
                <ul>
                    <li>
                        📧
                        <a href="mailto:andrew.auxilio@gmail.com" target="_blank">andrewauxilio.dev@gmail.com</a>
                    </li>
                    <li>
                        🌐
                        <a href="http://www.andrewauxilio.me">www.andrewauxilio.me</a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>

        <!-- Resume About Me -->
        <div id="mainArea">
            <section>
                <article>
                    <div class="sectionTitle">
                        <h1>About Me</h1>
                    </div>
                    <div class="sectionContent">
                        <p>
                            I am an aspiring full-stack developer. I love learning and utilizing new technologies to create solutions 
                            for improving both big and small business. I'm currently working with Laravel, VueJS and NodeJS.
                        </p>
                    </div>
                </article>
                <div class="clear"></div>
            </section>

            <!-- Resume Skills -->
            <section>
                <div class="sectionTitle">
                    <h1>Key Skills</h1>
                </div>
                <div class="sectionContent">
                    <ul class="keySkills">
                        <li>HTML5 & CSS3</li>
                        <li>VueJS</li>
                        <li>Laravel</li>
                        <li>NodeJS</li>
                        <li>Version Control - Git</li>
                    </ul>
                </div>
                <div class="clear"></div>
            </section>
            
            <!-- Resume Work Experience -->
            <section>
                <div class="sectionTitle">
                    <h1>Work Experience</h1>
                </div>
                <div class="sectionContent">
                    <article>
                        <h2>Dowell Windows</h2>
                        <p class="subDetails">May 2018 - March 2020</p>
                        <li>Design & develop website applications (Laravel & VueJS)</li>
                        <li>Perform updates on all website applications</li>
                        <li>Utilise GitHub and BitBucket for version control</li>
                        <li>Think of ideas to improve business processes' efficiency</li>
                    </article>
                    <br />
                    <article>
                        <h2>Freelance Web Developer</h2>
                        <p class="subDetails">November 2019 - Present</p>
                        <li>Design websites using AdobeXD</li>
                        <li>Develop websites using HTML, CSS, JavaScript</li>
                        <li>Host websites on VentraIP and Netlify</li>
                        <li>Utilise Github for version control</li>
                        <li>Utilise Trello for project management</li>
                        <br />
                    </article>
                </div>
                <div class="clear"></div>
            </section>

            <!-- Resume Education -->
            <section>
                <div class="sectionTitle">
                    <h1>Education</h1>
                </div>
                <div class="sectionContent">
                    <article>
                        <h2>RMIT University</h2>
                        <p class="subDetails">Bachelor of Information Technology</p>
                    </article>
                    <article>
                        <h2>Brentwood Secondary College</h2>
                        <p class="subDetails">Victorian Certificate of Education</p>
                    </article>
                </div>
                <div class="clear"></div>
            </section>
        </div>
    </div>
</div>
@endsection
