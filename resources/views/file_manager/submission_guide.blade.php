@extends('layouts.app')
<title>@yield('title', 'Submission Guide-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/file_manager/submission_guide.css') }}">
@include('main.banner', ['bannerTitle' => 'Paper Submission Guide'])
<div class="container">
    <section class="section-grp">
        <header class="file-guide-header">File Link:</header>
        <a class="file-guide-link" href="{{ asset('document/DGCA-59_Guidance-on-preparation-of-papers.pdf') }}" target="_blank">Guidance on Preparations of Papers (PDF)</a>
    </section>
    <section class="section-grp">
        <header class="section-hdr">Preamble</header>
        <div class="section-content">
            <div class="section-subheader-content">
                <ol>
                    <li>
                        The DGCA Conference is the highest forum for the Region attended by DGCAs of the APAC region. The conference therefore should aim to generate meaningful discussions and take conclusive decisions for the benefit of the progress of aviation in the region. The Action Items arising from a Discussion Paper should have the spirit of achieving common goals and regional cooperation for the APAC region.
                    </li>
                    <li>
                        Generally, the forum should not focus on matters already adequately resolved or dealt with by other technical working groups / subgroups (such as APANPIRG, RASG-APAC and RASCF) to avoid duplication. There are other sub-regional forums arranged by COSCAPs which also should not be duplicated in the DGCA Conference unless it needs concurrence for the programme utilization between the sub regions.
                    </li>
                    <li>
                        As such, the discussion papers, which are objected to formulate the Action Items for execution of the decisions made in the DGCA Conference, should be well articulated keeping the regional and global objectives in mind. In some instances, there could be a need to resonate key messages from the technical working groups / subgroups for the DGCAs’ discussion and guidance. Such papers should not be a reproduction of technical papers, but should be crafted in succinct executive language, minimizing technical jargon, to facilitate understanding. It has been observed that States/Administrations often submit Discussion Papers to share their own experience, which could be submitted as Information Papers.
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <section class="section-grp">
        <header class="section-hdr">Types of Papers</header>
        <div class="section-content">
            <article class="section-article">
                <ol>
                    <li>
                        Papers for the Conference submitted in advance by States/Administrations and International Organizations are classified as either <b class="text-primary">Discussion Papers (DP)</b> or <b class="text-primary">Information Papers (IP)</b>.
                    </li>
                    <li>
                        States/Administrations may seek more information from APAC RO on the Discussion Papers presented if any Action Item is likely to arise from the Discussion Papers.
                    </li>
                </ol>
            </article>

            <header class="section-subheader">Discussion Papers (DP)</header>
            <div class="section-subheader-content">
                <ol>
                    <li>
                        Discussion Papers deal with substantive matters that are intended to be raised at the Conference under the Agenda Items listed in the Provisional Agenda, provided on the Conference website. Since the Provisional Agenda may be changed, all papers received will be accommodated under appropriate items of the final Agenda.
                    </li>
                </ol>
            </div>
            <header class="section-subheader">Information Papers (IP)</header>
            <div class="section-subheader-content">
                <p>Information Papers are intended to inform the Conference about trends and developments occurring within States/Administrations, or they deal with innovative policy issues and technological advancements of interest to States/Administrations. Some Information Papers explain progress in promoting ICAO policies and/or provisions and experience sharing.</p>
            </div>
            <p class="note-message">
                <b>Note:</b> On exceptional basis, depending upon the nature of the matters raised and the amount of time available, after the presentation of all Discussion Papers, some opportunities may arise for presentation of selected Information Papers if agreed by the Conference.
            </p>
            <br>
            <header class="section-subheader">Panel Discussion</header>
            <div class="section-subheader-content">
                <ol>
                    <li>
                        Panel Discussions should focus on the regional priorities and objectives or any articulated tasks arising from the annual programs of the Region/Globe.
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <section class="section-grp">
        <header class="section-hdr">Content of Papers</header>
        <div class="section-content">
            <div class="section-subheader-content">
                <ol>
                    <li>
                        While active participation of States/Administrations in submitting Discussion Papers to the Conference was recognized, it is worth noting that the relevant DGCA action items are also presented at the meetings of RASG-APAC and APANPIRG Contributory Bodies for necessary action to follow up.
                    </li>
                    <li>
                        It is emphasized that the Discussion Papers which deal with substantive matters and accepted for presentation at the Conference should focus more on policy level matters, regional strategies, common deficiencies, challenges, as well as global and regional trends, cooperation and priorities.
                    </li>
                    <li>
                        It should be noted that ICAO Bodies such as the RASG-APAC, APANPIRG, RASCF and their Contributory bodies provide the most appropriate forum to deliberate on matters of specific technical or operational nature in view of the presence of relevant subject matter experts in those fora. Therefore, it is strongly recommended that submission of Discussion Papers on technical/operational matters that have been already adequately discussed or resolved at regional group meetings should be avoided to the extent possible for presenting to the DGCA Conference. States/Administrations and International Organizations may avoid submitting Discussion Papers with similar content, which have already been presented in previous DGCA Conferences as well as other regional meetings.
                    </li>
                    <li>
                        In preparation of Discussion Papers, the main body of the Paper should include a concise introduction, one or more discussion sections on the matter(s) raised, and a section on “Action by the Conference” inviting the Conference to note the contents of the paper and consider appropriate actions. Proposed actions may specify an action plan and estimated resources.
                    </li>
                    <li>
                        Upon receiving the paper, the Secretariat will determine if the submitted Discussion Paper is appropriate for presenting at the Conference in consultation with the States/Administrations concerned. The Secretariat may consult ICAO HQ, relevant Sections of ICAO APAC office, and Chairs of APANPIRG, RASG-APAC and RACSF, especially for Discussion Papers being proposed for the Safety, Air Navigation, and AVSEC/FAL agenda items. Discussion Papers, which address technical/operational matters, may be diverted to the relevant ICAO forums or their Contributory Bodies and advice the author concerned accordingly.
                    </li>
                    <li>
                        To the extent possible, the length of the Discussion Papers to be presented to the DGCA conference should not exceed three (3) pages for the main body and submitted to the Secretariat at least one (1) month before the Conference for review.
                    </li>
                    <li>
                        Information Papers should conclude with “Action by the Conference”, inviting the Conference to note the information in the paper.
                    </li>
                </ol>

            </div>
            <section class="section-grp">
                <header class="section-hdr">Format of Papers</header>
                <div class="section-content">
                    <div class="section-subheader-content">
                        <p>
                            Papers should be submitted in electronic form using MS Word format to allow the Secretariat to do the final formatting. Attachments to papers that are not supposed to be edited by the Secretariat could be submitted in <b class="text-primary">Adobe Acrobat (pdf)</b> format. The overall file size of each paper together with any attachments should be optimized for easy download from the website.

                        </p>
                    </div>
                    <header class="section-subheader">Paper Format</header>
                    <div class="section-content">
                        <p>
                            Discussion and Information Paper should include:
                        </p>
                        <div class="section-subheader-content">
                            <ol>
                                <li>1.) A summary block of about 8 lines to describe the essence of the paper</li>
                                <li>2.) Main body</li>
                                <li>3.) Executive Summary (for DPs only) of about one-half page length. </li>
                            </ol>
                        </div>
                        <p class="note-message">
                            <b>Note:</b> Authors of DPs are strongly encouraged to prepare an Executive Summary, which will facilitate adequate coverage of the main issues and proposals raised in the paper in the Conference Report.
                        </p>
                    </div>
                    <div class="section-content">
                        <p>Papers should be prepared using the pre-formatted templates on the Conference website. The style specifications are as follows:</p>
                        <div class="section-subheader-content">
                            <ol>
                                <li>Font: Times New Roman</li>
                                <li>Size: 11 points/pixels</li>
                                <li>Data processing format: MS Word (.doc)</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-grp">
                <header class="section-hdr">Submission of Papers and Publishing on the website</header>
                <div class="section-content">
                    <p>
                        States/Administrations and International Organizations are urged to submit their papers at the earliest possible convenience, at least 30 days before the meeting date.
                    </p>
                    <p>
                        The papers should be sent as e-mail attachments to the ICAO Asia and Pacific Regional Office and copied to the Host State at the following addresses:
                    </p>
                    <div class="section-subheader-content">
                        <ol>
                            <li><b>ICAO Regional Office Regional Director</b></li>
                            <li>E-mail: <a href="#">apac@icao.int</a></li>
                        </ol>
                    </div>
                    <div class="section-subheader-content">
                        <ol>
                        <li><b>Host State - Civil Aviation Authority of the Philippines</b></li>
                        <li>Conference Secretariat: <a href="#">dgca59_secretariat@caap.gov.ph</a></li>
                        </ol>
                    </div>

                    <div class="section-subheader-content">
                        <ol>
                            <li>
                                Timely distribution of the papers is particularly important in the case of Discussion Papers so that the matters raised can be given due consideration by the delegates. All papers received by the specified deadline will be posted in pdf format on the website established by the Host State for the purpose of this Conference. Every effort is made by the Host Organizing Committee and the Secretariat to make papers available to participating delegates prior to the Conference.
                            </li>
                            <li>
                                On the question of selection of papers, the Directors General of Civil Aviation, during the 42nd Conference also decided that it should be left to the ICAO Regional Office. The Regional Office would select papers for presentation bearing in mind the time allocated to each session. Only Discussion Papers would be taken up for presentation while the Information Papers, which often provide valuable materials, should continue to be encouraged, but only for the information of delegations.
                            </li>
                        </ol>

                    </div>
                </div>
            </section>
        </div>
        <script src="{{ asset('js/welcome/scroll.js') }}"></script>
        @endsection
