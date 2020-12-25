@extends('welcome')

@section('content')
    <div class="animate__animated animate__fadeIn">
        <header class="my-4 pb-4">
            <h1>
                @lang('pages::privacy.title')
            </h1>
        </header>

        <div class="content">
            Thank you for choosing to be part of our community at <span class="font-weight-bold">@lang('basic.website_name')</span>
            ("Company", "we", "us", "our"). We are committed to protecting your personal information and your right to
            privacy. If you have any questions or concerns about this privacy notice, or our practices with regards to
            your personal information, please contact us at <span class="font-weight-bold">@lang('pages::privacy.email')</span>.
            <br/>
            <br/>
            <br/>
            When you visit our website <a href="{{route('index')}}" target="_blank" title="@lang('basic.website_name')"
                                          data-custom-class="link">@lang('basic.url')</a> (the "<span
                class="font-weight-bold">Website</span>"), and more generally, use any of our services (the "<span
                class="font-weight-bold">Services</span>", which include the   Website, we appreciate that you are
            trusting us with your personal information. We take your privacy very seriously. In this privacy notice, we
            seek to explain to you in the clearest way possible what information we collect, how we use it and what
            rights you have in relation to it. We hope you take some time to read through it carefully, as it is
            important. If there are any terms in this privacy notice that you do not agree with, please discontinue use
            of our Services immediately.
            <br/>
            <br/>
            <br/>
            This privacy notice applies to all information collected through our Services (which, as described above,
            includes our  <span class="font-weight-bold">Website</span>, as well as, any related services, sales,
            marketing or events. Please read this privacy notice carefully as it will help you understand what we do
            with the information that we collect. TABLE OF CONTENTS
            <br/>
            <br/>
            <br/>

            <div>
                1. <a href="#information" class="text-uppercase"
                      title="@lang('pages::privacy.information')">@lang('pages::privacy.information')</a><br/>
                2. <a href="#information_usage" class="text-uppercase"
                      title="@lang('pages::privacy.information_usage')">@lang('pages::privacy.information_usage')</a><br/>
                3. <a href="#information_share" class="text-uppercase"
                      title="@lang('pages::privacy.information_share')">@lang('pages::privacy.information_share')</a><br/>
                4. <a href="#information_cookies" class="text-uppercase"
                      title="@lang('pages::privacy.information_cookies')">@lang('pages::privacy.information_cookies')</a><br/>
                5. <a href="#information_store" class="text-uppercase"
                      title="@lang('pages::privacy.information_store')">@lang('pages::privacy.information_store')</a><br/>
                6. <a href="#information_safe" class="text-uppercase"
                      title="@lang('pages::privacy.information_safe')">@lang('pages::privacy.information_safe')</a><br/>
                7. <a href="#information_privacy_rights" class="text-uppercase"
                      title="@lang('pages::privacy.information_privacy_rights')">
                    @lang('pages::privacy.information_privacy_rights')</a><br/>
                8. <a href="#information_track_features" class="text-uppercase" title="@lang('pages::privacy.information_track_features')">
                    @lang('pages::privacy.information_track_features')
                </a><br/>
                9. <a href="#information_california_privacy" class="text-uppercase"
                      title="@lang('pages::privacy.information_california_privacy')">
                    @lang('pages::privacy.information_california_privacy')
                </a><br/>
                10. <a href="#information_notice" class="text-uppercase" title="@lang('pages::privacy.information_notice')">
                    @lang('pages::privacy.information_notice')
                </a><br/>
                11. <a href="#information_contact" class="text-uppercase" title="@lang('pages::privacy.information_contact')">
                    @lang('pages::privacy.information_contact')
                </a><br/>
            </div>
            <br/>
            <br/>
            <a name="information"></a>
            <h4 class="text-uppercase">1. @lang('pages::privacy.information')</h4>
            <br/>
            <b>Personal information you disclose to us</b>
            <br/>
            <br/>
            We collect personal information that you provide to us.
            <br/>
            <br/>
            We collect personal information that you voluntarily provide to us when you express an interest in obtaining
            information about us or our products and Services, when you participate in activities on the Website   or
            otherwise when you contact us.
            <br/>
            <br/>
            The personal information that we collect depends on the context of your interactions with us and the
            Website, the choices you make and the products and features you use. The personal information we collect may
            include the following:
            <br/>
            <br/>
            Personal Information Provided by You. We collect names and  email addresses
            <br/>
            <br/>
            All personal information that you provide to us must be true, complete and accurate, and you must notify us
            of any changes to such personal information.
            <br/>
            <br/>
            <b>Information automatically collected</b>
            <br/>
            <br/>
            In Short:  Some information — such as your Internet Protocol (IP) address and/or browser and device
            characteristics — is collected automatically when you visit our Website
            <br/>
            <br/>
            We automatically collect certain information when you visit, use or navigate the Website. This information
            does not reveal your specific identity (like your name or contact information) but may include device and
            usage information, such as your IP address, browser and device characteristics, operating system, language
            preferences, referring URLs, device name, country, location, information about how and when you use our
            Website and other technical information. This information is primarily needed to maintain the security and
            operation of our Website, and for our internal analytics and reporting purposes.
            <br/>
            <br/>
            Like many businesses, we also collect information through cookies and similar technologies.
            <br/>
            <br/>
            The information we collect includes:
            <ul>
                <li class="my-2">
                    Log and Usage Data. Log and usage data is service-related, diagnostic, usage and performance
                    information our servers automatically collect when you access or use our Website and which we record
                    in log files. Depending on how you interact with us, this log data may include your IP address,
                    device information, browser type and settings and information about your activity in the Website
                    (such as the date/time stamps associated with your usage, pages and files viewed, searches and other
                    actions you take such as which features you use), device event information (such as system activity,
                    error reports (sometimes called 'crash dumps') and hardware settings).
                </li>
                <li class="my-2">
                    Device Data. We collect device data such as information about your computer, phone, tablet or other
                    device you use to access the Depending on the device used, this device data may include information
                    such as your IP address (or proxy server), device and application identification numbers, location,
                    browser type, hardware model Internet service provider and/or mobile carrier, operating system and
                    system configuration information.
                </li>
                <li class="my-2">
                    Location Data. We collect location data such as information about your device's location, which can
                    be either precise or imprecise. How much information we collect depends on the type and settings of
                    the device you use to access the Website. For example, we may use GPS and other technologies to
                    collect geolocation data that tells us your current location (based on your IP address). You can opt
                    out of allowing us to collect this information either by refusing access to the information or by
                    disabling your Location setting on your device. Note however, if you choose to opt out, you may not
                    be able to use certain aspects of the Services.
                </li>
            </ul>
            <br/>
            <br/>
            <a name="information_usage"></a>
            <h4 class="text-uppercase">2. @lang('pages::privacy.information_usage')</h4>
            <br/>
            In Short: We process your information for purposes based on legitimate business interests, the fulfillment
            of our contract with you, compliance with our legal obligations, and/or your consent.
            <br/>
            <br/>
            We use personal information collected via our Website for a variety of
            business purposes described below. We process your personal information for these purposes in reliance on
            our legitimate business interests, in order to enter into or perform a contract with you, with your consent,
            and/or for compliance with our legal obligations. We indicate the specific processing grounds we rely on
            next to each purpose listed below.
            <br/>
            <br/>
            We use the information we collect or receive:
            <ul>
                <li class="my-2">
                    To send you marketing and promotional communications.</strong> We and/or our third-party marketing
                    partners may use the personal information you send to us for our marketing purposes, if this is in
                    accordance with your marketing preferences. For example, when expressing an interest in obtaining
                    information about us or our Website, subscribing to marketing or otherwise contacting us, we will
                    collect personal information from you. You can opt-out of our marketing emails at any time (see the
                    "<a href="#information_privacy_rights">WHAT ARE YOUR PRIVACY RIGHTS</a>" below).
                </li>
                <li>
                    Deliver targeted advertising to you. We may use your information to develop and display personalized
                    content and advertising (and work with third parties who do so) tailored to your interests and/or
                    location and to measure its effectiveness.
                </li>
            </ul>
            <br/>
            <br/>
            <a name="information_share"></a>
            <h4 class="text-uppercase">3. @lang('pages::privacy.information_share')</h4>
            <br/>
            We only share information with your consent, to comply with laws, to provide you with services, to protect
            your rights, or to fulfill business obligations.
            <br/>
            <br/>
            We may process or share your data that we hold based on the following legal basis:
            <ul>
                <li class="my-2">
                    We may process your data if you have given us specific consent to use your personal information for
                    a specific purpose.
                </li>
                <li class="my-2">
                    <b>Legitimate Interests:</b> We may process your data when it is reasonably necessary to achieve our
                    legitimate business interests.
                </li>
                <li class="my-2">
                    <b>Performance of a Contract:</b> Where we have entered into a contract with you, we may process
                    your personal information to fulfill the terms of our contract.
                </li>
                <li class="my-2">
                    <b>Legal Obligations:</b> We may disclose your information where we are legally required to do so in
                    order to comply with applicable law, governmental requests, a judicial proceeding, court order, or
                    legal process, such as in response to a court order or a subpoena (including in response to public
                    authorities to meet national security or law enforcement requirements).
                </li>
                <li class="my-2">
                    <b>Vital Interests:</b> We may disclose your information where we believe it is necessary to
                    investigate, prevent, or take action regarding potential violations of our policies, suspected
                    fraud, situations involving potential threats to the safety of any person and illegal activities, or
                    as evidence in litigation in which we are involved.
                </li>
            </ul>
            <br/>
            More specifically, we may need to process your data or share your personal information in the following
            situations:
            <ul>
                <li class="my-2">
                    <b>Business Transfers.</b> We may share or transfer your information in connection with, or during
                    negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion
                    of our business to another company.
                </li>
            </ul>
            <br/>
            <br/>
            <a name="information_cookies"></a>
            <h4 class="text-uppercase">4. @lang('pages::privacy.information_cookies')</h4>
            <br/>
            We may use cookies and other tracking technologies to collect and store your information.We may use cookies
            and similar tracking technologies (like web beacons and pixels) to access or store information. Specific
            information about how we use such technologies and how you can refuse certain cookies is set out in our
            Cookie Notice
            <br/>
            <br/>
            <br/>
            <a name="information_store"></a>
            <h4 class="text-uppercase">5. @lang('pages::privacy.information_store')</h4>
            <br/>
            In Short: We keep your information for as long as necessary to fulfill the purposes outlined in this privacy
            notice unless otherwise required by law.
            <br/>
            <br/>
            We will only keep your personal information for as long as it is necessary for the purposes set out in this
            privacy notice, unless a longer retention period is required or permitted by law (such as tax, accounting or
            other legal requirements). No purpose in this notice will require us keeping your personal information for
            longer than 2 years.
            <br/>
            <br/>
            When we have no ongoing legitimate business need to process your personal information, we will either
            delete or anonymize such information, or, if this is not possible (for example, because your personal
            information has been stored in backup archives), then we will securely store your personal information and
            isolate it from any further processing until deletion is possible.
            <br/>
            <br/>
            <a name="information_safe"></a>
            <h4 class="text-uppercase">6. @lang('pages::privacy.information_safe')</h4>
            <br/>
            In Short: We aim to protect your personal information through a system of organizational and technical
            security measures.
            <br/>
            <br/>We have implemented appropriate technical and organizational security measures designed to protect the
            security of any personal information we process. However, despite our safeguards and efforts to secure your
            information, no electronic transmission over the Internet or information storage technology can be
            guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other
            unauthorized third parties will not be able to defeat our security, and improperly collect, access, steal,
            or modify your information. Although we will do our best to protect your personal information, transmission
            of personal information to and from our Website is at your own risk. You should only access the Website
            within a secure environment.
            <br/>
            <br/>
            <a name="information_privacy_rights"></a>
            <h4 class="text-uppercase">7. @lang('pages::privacy.information_privacy_rights')</h4>
            <br/>
            In some regions, such as the European Economic Area, you have rights that allow you greater access to and
            control over your personal information. You may review, change, or terminate your account at any time.
            <br/>
            <br/>
            In some regions (like the European Economic Area), you have certain rights under applicable data protection
            laws. These may include the right (i) to request access and obtain a copy of your personal information, (ii)
            to request rectification or erasure; (iii) to restrict the processing of your personal information; and (iv)
            if applicable, to data portability. In certain circumstances, you may also have the right to object to the
            processing of your personal information. To make such a request, please use the <a href="#information_contact">contact
                details</a> provided below. We will consider and act upon any request in accordance with applicable data
            protection laws.
            <br/>
            <br/>
            If we are relying on your consent to process your personal information, you have the right to withdraw your
            consent at any time. Please note however that this will not affect the lawfulness of the processing before
            its withdrawal, nor will it affect the processing of your personal information conducted in reliance on
            lawful processing grounds other than consent.
            <br/>
            <br/>
            If you are a resident in the European Economic Area and you believe we are unlawfully processing your
            personal information, you also have the right to complain to your local data protection supervisory
            authority. You can find their contact details here: <a
                href="http://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm" target="_blank"
                title="Data Protection Europe">http://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm</a>
            <br/>
            <br/>
            If you are a resident in Switzerland, the contact details for the data protection authorities are available
            here: <a href="https://www.edoeb.admin.ch/edoeb/en/home.html" title="Edoeb" target="_blank">https://www.edoeb.admin.ch/edoeb/en/home.html</a>
            <br/>
            <br/>
            <b>Cookies and similar technologies:</b> Most Web browsers are set to accept cookies by default. If you
            prefer, you can usually choose to set your browser to remove cookies and to reject cookies. If you choose to
            remove cookies or reject cookies, this could affect certain features or services of our Website To opt-out
            of interest-based advertising by advertisers on our Website visit <a
                href="http://www.aboutads.info/choices/" title="Choices" target="_blank">http://www.aboutads.info/choices/</a>
            <br/>
            <br/>
            <a name="information_track_features"></a>
            <h4 class="text-uppercase">8. @lang('pages::privacy.information_track_features')</h4>
            <br/>
            Most web browsers and some mobile operating systems and mobile applications include a Do-Not-Track ("DNT")
            feature or setting you can activate to signal your privacy preference not to have data about your online
            browsing activities monitored and collected. At this stage no uniform technology standard for recognizing
            and implementing DNT signals has been finalized. As such, we do not currently respond to DNT browser signals
            or any other mechanism that automatically communicates your choice not to be tracked online. If a standard
            for online tracking is adopted that we must follow in the future, we will inform you about that practice in
            a revised version of this privacy notice.
            <br/>
            <br/>
            <a name="information_california_privacy"></a>
            <h4 class="text-uppercase">9. @lang('pages::privacy.information_california_privacy')</h4>
            <br/>
            In Short: Yes, if you are a resident of California, you are granted specific rights
            regarding access to your personal information.
            <br/>
            <br/>
            California Civil Code Section 1798.83, also known as the "Shine The Light" law, permits our users who are
            California residents to request and obtain from us, once a year and free of charge, information about
            categories of personal information (if any) we disclosed to third parties for direct marketing purposes and
            the names and addresses of all third parties with which we shared personal information in the immediately
            preceding calendar year. If you are a California resident and would like to make such a request, please
            submit your request in writing to us using the contact information provided below.
            <br/>
            <br/>
            If you are under 18 years of age, reside in California, and have a registered account with the Website , you
            have the right to request removal of unwanted data that you publicly post on the Website. To request removal
            of such data, please contact us using the contact information provided below, and include the email address
            associated with your account and a statement that you reside in California. We will make sure the data is
            not publicly displayed on the Website, but please be aware that the data may not be completely or
            comprehensively removed from all our systems (e.g. backups, etc.).
            <br/>
            <br/>
            <b>CCPA Privacy Notice</b>
            <br/>
            <br/>
            The California Code of Regulations defines a "resident" as:
            <br/>
            <br/>
            <div class="ml-2">
                (1) every individual who is in the State of California for other than a temporary or transitory purpose
                and
            </div>
            <div class="ml-2">
                (2) every individual who is domiciled in the State of California who is outside the State
                of California for a temporary or transitory purpose
            </div>
            <br/>
            All other individuals are defined as "non-residents."
            <br/>
            <br/>
            If this definition of "resident" applies to you, we must adhere to certain rights and obligations regarding
            your personal information.
            <br/>
            <br/>
            What categories of personal information do we collect?
            <br/>
            <br/>
            We have collected the following categories of personal information in the past twelve (12) months:
            <br/>
            <br/>
            <table class="table text-light">
                <thead>
                <tr>
                    <th scope="col">Category</th>
                    <th scope="col">Examples</th>
                    <th scope="col">Collected</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>A. Identifiers</td>
                    <td>Contact details, such as real name, alias, postal address, telephone or mobile contact number,
                        unique personal identifier, online identifier, Internet Protocol address, email address and
                        account name
                    </td>
                    <td>NO</td>
                </tr>
                <tr>
                    <td>B. Personal information categories listed in the California Customer Records statute</td>
                    <td>Name, contact information, education, employment, employment history and financial information
                    </td>
                    <td>YES</td>
                </tr>
                <tr>
                    <td>C. Protected classification characteristics under California or federal law</td>
                    <td>Gender and date of birth</td>
                    <td>NO</td>
                </tr>
                <tr>
                    <td>D. Commercial information</td>
                    <td>Transaction information, purchase history, financial details and payment information</td>
                    <td>NO</td>
                </tr>
                <tr>
                    <td>E. Biometric information</td>
                    <td>Fingerprints and voiceprints</td>
                    <td>NO</td>
                </tr>
                <tr>
                    <td>F. Internet or other similar network activity</td>
                    <td>Browsing history, search history, online behavior, interest data, and interactions with our and
                        other websites, applications, systems and advertisements
                    </td>
                    <td>NO</td>
                </tr>
                <tr>
                    <td>G. Geolocation data</td>
                    <td>Device location</td>
                    <td>NO</td>
                </tr>
                <tr>
                    <td>H. Audio, electronic, visual, thermal, olfactory, or similar information</td>
                    <td>Images and audio, video or call recordings created in connection with our business activities
                    </td>
                    <td>NO</td>
                </tr>
                <tr>
                    <td>I. Professional or employment-related information</td>
                    <td>Business contact details in order to provide you our services at a business level, job title as
                        well as work history and professional qualifications if you apply for a job with us
                    </td>
                    <td>NO</td>
                </tr>
                <tr>
                    <td>J. Education Information</td>
                    <td>Student records and directory information</td>
                    <td>NO</td>
                </tr>
                <tr>
                    <td>K. Inferences drawn from other personal information</td>
                    <td>Inferences drawn from any of the collected personal information listed above to create a profile
                        or summary about, for example, an individual’s preferences and characteristics
                    </td>
                    <td>NO</td>
                </tr>
                </tbody>
            </table>
            <br/>
            We may also collect other personal information outside of these categories instances where you interact with
            us in-person, online, or by phone or mail in the context of:
            <br/>
            <ul>
                <li class="my-2">
                    Receiving help through our customer support channels;
                </li>
                <li class="my-2">
                    Participation in customer surveys or contests;
                </li>
                <li class="my-2">
                    Facilitation in the delivery of our Services and to respond to your inquiries.
                </li>
            </ul>
            <b>How do we use and share your personal information?</b>
            <br/>
            <br/>
            More information about our data collection and sharing practices can be found in this privacy notice.
            <br/>
            <br/>
            You may contact us by email at @lang('pages::privacy.email'), or by referring to the contact details at the bottom of
            this document.
            <br/>
            <br/>
            If you are using an authorized agent to exercise your right to opt-out we may deny a request if the
            authorized agent does not submit proof that they have been validly authorized to act on your behalf.
            <br/>
            <br/>
            <b>Will your information be shared with anyone else?</b>
            <br/>
            <br/>
            We may disclose your personal information with our service providers pursuant to a written contract between
            us and each service provider. Each service provider is a for-profit entity that processes the information on
            our behalf.
            <br/>
            <br/>
            We may use your personal information for our own business purposes, such as for undertaking internal
            research for technological development and demonstration. This is not considered to be "selling" of your
            personal data.
            <br/>
            <br/>
            @lang('basic.website_name') has not disclosed or sold any personal information to third parties for a business or commercial
            purpose in the preceding 12 months. @lang('basic.website_name') will not sell personal information in the future belonging to
            website visitors, users and other consumers.
            <br/>
            <br/>
            <b>Your rights with respect to your personal data</b>
            <br/>
            <br/>

            <u>Right to request deletion of the data - Request to delete</u>
            <br/>
            <br/>You can ask for the deletion of your personal information. If you ask us to delete your personal
            information, we will respect your request and delete your personal information, subject to certain
            exceptions provided by law, such as (but not limited to) the exercise by another consumer of his or her
            right to free speech, our compliance requirements resulting from a legal obligation or any processing that
            may be required to protect against illegal activities.
            <br/>
            <br/>
            <u>Right to be informed - Request to know</u>
            <br/>
            <br/>
            Depending on the circumstances, you have a right to know:
            <ul>
                <li class="my-2">whether we collect and use your personal information;</li>
                <li class="my-2">the categories of personal information that we collect;</li>
                <li class="my-2">the purposes for which the collected personal information is used;</li>
                <li class="my-2">whether we sell your personal information to third parties;</li>
                <li class="my-2">the categories of personal information that we sold or disclosed for a business
                    purpose;
                </li>
                <li class="my-2">the categories of third parties to whom the personal information was sold or disclosed
                    for a business purpose;
                </li>
                <li class="my-2">the business or commercial purpose for collecting or selling personal information.</li>
            </ul>
            <br/>
            In accordance with applicable law, we are not obligated to provide or delete consumer information that is
            de-identified in response to a consumer request or to re-identify individual data to verify a consumer
            request.
            <br/>
            <br/>
            <u>Right to Non-Discrimination for the Exercise of a Consumer’s Privacy Rights</u></span></span></span>
            <br/>
            <br/>
            We will not discriminate against you if you exercise your privacy rights.</span></span></span>
            <br/>
            <br/>
            <u>Verification process</u>
            <br/>
            <br/>
            Upon receiving your request, we will need to verify your identity to determine you are the same person about
            whom we have the information in our system. These verification efforts require us to ask you to provide
            information so that we can match it with information you have previously provided us. For instance,
            depending on the type of request you submit, we may ask you to provide certain information so that we can
            match the information you provide with the information we already have on file, or we may contact you
            through a communication method (e.g. phone or email) that you have previously provided to us. We may also
            use other verification methods as the circumstances dictate.
            <br/>
            <br/>
            We will only use personal information provided in your request to verify your identity or authority to make
            the request. To the extent possible, we will avoid requesting additional information from you for the
            purposes of verification. If, however, if we cannot verify your identity from the information already
            maintained by us, we may request that you provide additional information for the purposes of verifying your
            identity, and for security or fraud-prevention purposes. We will delete such additionally provided
            information as soon as we finish verifying you.
            <br/>
            <br/>
            <u>Other privacy rights</u>
            <ul>
                <li class="my-2">
                    you may object to the processing of your personal data
                </li>
                <li class="my-2">
                    you may request correction of your personal data if it is incorrect or no longer relevant, or ask to
                    restrict the processing of the data
                </li>
                <li class="my-2">
                    you can designate an authorized agent to make a request under the CCPA on your behalf. We may deny a
                    request from an authorized agent that does not submit proof that they have been validly authorized
                    to act on your behalf in accordance with the CCPA.
                </li>
                <li class="my-2">
                    you may request to opt-out from future selling of your personal information to third parties. Upon
                    receiving a request to opt-out, we will act upon the request as soon as feasibly possible, but no
                    later than 15 days from the date of the request submission.
                </li>
            </ul>
            <br/>
            To exercise these rights, you can contact us by email at <b><u>@lang('pages::privacy.email')</u></b> or by referring
            to the contact details at the bottom of this document. If you have a complaint about how we handle your
            data, we would like to hear from you.
            <br/>
            <br/>
            <a name="information_notice"></a>
            <h4 class="text-uppercase">10. @lang('pages::privacy.information_notice')</h4>
            <br/>
            In Short: Yes, we will update this notice as necessary to stay compliant with relevant laws.
            <br/>
            <br/>
            We may update this privacy notice from time to time. The updated version will be indicated by an updated
            "Revised" date and the updated version will be effective as soon as it is accessible. If we make material
            changes to this privacy notice, we may notify you either by prominently posting a notice of such changes or
            by directly sending you a notification. We encourage you to review this privacy notice frequently to be
            informed of how we are protecting your information.
            <br/>
            <br/>
            <a name="information_contact"></a>
            <h4 class="text-uppercase">11. @lang('pages::privacy.information_contact')</h4>
            <br/>
            If you have questions or comments about this notice, you may email us at <b><u>@lang('pages::privacy.email')</u></b>
        </div>
    </div>
@endsection
