<?php
/**
 * Template Name: Participant Information Booklet
 *
 * HOW TO USE:
 * 1. Upload this file to your active theme folder (wp-content/themes/your-theme/)
 * 2. Create a new WordPress Page, set Template = "Participant Information Booklet"
 * 3. Replace FORM_ID_1 and FORM_ID_2 below with your actual Gravity Forms IDs
 */

// ── Replace these with your actual Gravity Forms IDs ─────────────────────────
define( 'PIB_FORM_ID_EASY_READ', 17 ); // ← Easy Read form ID
define( 'PIB_FORM_ID_STANDARD',  18 ); // ← Standard form ID
// ─────────────────────────────────────────────────────────────────────────────

get_header();
?>

<style>
/* ═══════════════════════════════════════════════════
   PIVOTAL BOOKLET — Scoped styles (.pivotal-booklet)
   All selectors prefixed to avoid theme conflicts
═══════════════════════════════════════════════════ */

.pivotal-booklet *,
.pivotal-booklet *::before,
.pivotal-booklet *::after {
    box-sizing: border-box;
}

.pivotal-booklet {
    font-size: 16px;
    line-height: 1.8;
    color: #2c2c2c;
    background: #ffffff;
    max-width: 860px;
    margin: 40px auto 60px;
    padding: 0 20px;
}

/* ── Logo / Header ─────────────────────────────────── */

.pivotal-booklet__header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 24px 0 20px;
    border-bottom: 3px solid #5a9e2f;
    margin-bottom: 28px;
}

.pivotal-booklet__header .site-logo img {
    max-height: 80px;
    width: auto;
}

.pivotal-booklet__header-contact {
    text-align: right;
    font-size: 13px;
    color: #555;
    line-height: 1.6;
}

.pivotal-booklet__header-contact a {
    color: #5a9e2f;
    text-decoration: none;
}

/* ── Tab Navigation ────────────────────────────────── */

.pivotal-booklet__tab-nav {
    display: flex;
    border-bottom: 2px solid #5a9e2f;
    margin-bottom: 32px;
    gap: 4px;
}

.pivotal-booklet__tab-btn {
    padding: 12px 28px;
    font-size: 16px;
    font-weight: 600;
    border: 2px solid #5a9e2f;
    border-bottom: none;
    background: #f3f9ec;
    color: #5a9e2f;
    cursor: pointer;
    border-radius: 6px 6px 0 0;
    transition: background 0.2s, color 0.2s;
    outline: none;
    letter-spacing: 0.01em;
}

.pivotal-booklet__tab-btn:hover {
    background: #e6f5d4;
}

.pivotal-booklet__tab-btn.is-active {
    background: #5a9e2f;
    color: #ffffff;
}

/* ── Tab Content ───────────────────────────────────── */

.pivotal-booklet__tab-panel {
    display: none;
}

.pivotal-booklet__tab-panel.is-active {
    display: block;
}

/* ── Document Title ────────────────────────────────── */

.pivotal-booklet h1 {
    font-size: 26px;
    font-weight: 800;
    color: #2c2c2c;
    text-align: center;
    line-height: 1.3;
    margin: 0 0 6px;
    letter-spacing: -0.01em;
}

.pivotal-booklet__subtitle {
    font-size: 18px;
    font-weight: 700;
    color: #5a9e2f;
    text-align: center;
    margin: 0 0 4px;
    letter-spacing: 0.02em;
}

.pivotal-booklet__org {
    font-size: 16px;
    font-weight: 600;
    color: #e8622a;
    text-align: center;
    margin: 0 0 28px;
}

.pivotal-booklet__doc-header {
    text-align: center;
    padding: 18px 0 24px;
    border-bottom: 1px solid #d6ecc0;
    margin-bottom: 28px;
}

/* ── Section Headings ──────────────────────────────── */

.pivotal-booklet h2 {
    font-size: 17px;
    font-weight: 700;
    color: #3d7a1a;
    margin: 32px 0 10px;
    padding: 8px 14px;
    background: #f3f9ec;
    border-left: 4px solid #5a9e2f;
    border-radius: 0 4px 4px 0;
    line-height: 1.4;
}

/* ── Paragraphs ────────────────────────────────────── */

.pivotal-booklet p {
    margin: 0 0 12px;
    font-size: 16px;
    line-height: 1.8;
    color: #2c2c2c;
}

/* ── Lists ─────────────────────────────────────────── */

.pivotal-booklet ul {
    margin: 8px 0 14px 0;
    padding-left: 26px;
    list-style: none;
}

.pivotal-booklet ul li {
    position: relative;
    padding-left: 18px;
    margin-bottom: 6px;
    font-size: 16px;
    line-height: 1.7;
}

.pivotal-booklet ul li::before {
    content: "●";
    position: absolute;
    left: 0;
    color: #5a9e2f;
    font-size: 11px;
    top: 4px;
}

.pivotal-booklet ol {
    margin: 8px 0 14px 0;
    padding-left: 22px;
}

.pivotal-booklet ol li {
    margin-bottom: 5px;
    font-size: 16px;
    line-height: 1.7;
}

/* ── Sub-list (alpha / roman) ──────────────────────── */

.pivotal-booklet .pib-sub-list {
    list-style: none;
    margin: 8px 0 8px 0;
    padding-left: 20px;
}

.pivotal-booklet .pib-sub-list > li {
    margin-bottom: 4px;
    padding-left: 0;
}

.pivotal-booklet .pib-sub-list > li::before {
    content: none;
}

.pivotal-booklet .pib-sub-list-inner {
    list-style: none;
    padding-left: 22px;
    margin: 4px 0 4px 0;
}

.pivotal-booklet .pib-sub-list-inner > li {
    padding-left: 0;
    margin-bottom: 3px;
}

.pivotal-booklet .pib-sub-list-inner > li::before {
    content: none;
}

/* ── Links ─────────────────────────────────────────── */

.pivotal-booklet a {
    color: #e8622a;
    text-decoration: underline;
    word-break: break-all;
}

.pivotal-booklet a:hover {
    color: #c4501e;
}

/* ── Table of Contents ─────────────────────────────── */

.pivotal-booklet__toc {
    background: #f3f9ec;
    border: 1px solid #c9e8a0;
    border-radius: 6px;
    padding: 18px 22px;
    margin: 0 0 28px;
}

.pivotal-booklet__toc h3 {
    font-size: 16px;
    font-weight: 700;
    color: #3d7a1a;
    margin: 0 0 12px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.pivotal-booklet__toc-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: repeat(9, auto);
    grid-auto-flow: column;
    gap: 4px 20px;
    font-size: 16px;
}

.pivotal-booklet__toc-row {
    display: flex;
    gap: 6px;
}

.pivotal-booklet__toc-num {
    font-weight: 700;
    color: #5a9e2f;
    min-width: 28px;
    flex-shrink: 0;
}

/* ── Divider ───────────────────────────────────────── */

.pivotal-booklet__divider {
    border: none;
    border-top: 1px solid #d6ecc0;
    margin: 28px 0;
}

/* ── Form section ──────────────────────────────────── */

.pivotal-booklet__form-section {
    margin-top: 40px;
    padding-top: 32px;
    border-top: 2px solid #5a9e2f;
}

.pivotal-booklet__form-section h3 {
    font-size: 17px;
    font-weight: 700;
    color: #3d7a1a;
    margin: 0 0 20px;
}

/* ── Blank form download ───────────────────────────── */

.pivotal-booklet__download-section {
    margin-top: 32px;
    padding: 18px 22px;
    background: #f3f9ec;
    border: 1px solid #c9e8a0;
    border-radius: 6px;
}

.pivotal-booklet__download-section p {
    margin: 0 0 12px;
}

.pivotal-booklet__download-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}

/* Override the generic ".pivotal-booklet a" link styling (underline, dark-orange
   hover text) so these buttons keep the site-wide cleenhearts-btn-two look —
   without this, ".pivotal-booklet a:hover" wins on specificity over
   ".cleenhearts-btn-two:hover" and leaves near-illegible dark-orange-on-orange text. */
.pivotal-booklet__download-buttons a.cleenhearts-btn-two {
    text-decoration: none;
}

.pivotal-booklet__download-buttons a.cleenhearts-btn-two:hover {
    color: var(--cleenhearts-white, #fff);
}

/* ── Gravity Forms overrides (scoped) ──────────────── */

.pivotal-booklet .gform_wrapper form {
}

.pivotal-booklet .gform_wrapper .gfield_label {
    font-size: 16px !important;
    font-weight: 600 !important;
    color: #2c2c2c !important;
}

.pivotal-booklet .gform_wrapper input[type="text"],
.pivotal-booklet .gform_wrapper input[type="email"],
.pivotal-booklet .gform_wrapper input[type="tel"],
.pivotal-booklet .gform_wrapper textarea,
.pivotal-booklet .gform_wrapper select {
    border: 1px solid #b8d98a !important;
    border-radius: 4px !important;
    padding: 8px 12px !important;
    font-size: 16px !important;
    color: #2c2c2c !important;
    width: 100% !important;
    background: #fafff5 !important;
    transition: border-color 0.2s !important;
}

.pivotal-booklet .gform_wrapper input[type="text"]:focus,
.pivotal-booklet .gform_wrapper input[type="email"]:focus,
.pivotal-booklet .gform_wrapper textarea:focus {
    border-color: #5a9e2f !important;
    outline: none !important;
    box-shadow: 0 0 0 2px rgba(90,158,47,0.15) !important;
}

.pivotal-booklet .gform_wrapper .gform_footer input[type="submit"],
.pivotal-booklet .gform_wrapper .gform_footer button,
.pivotal-booklet .gform_wrapper input[type="submit"] {
    background: #5a9e2f !important;
    color: #ffffff !important;
    border: none !important;
    padding: 12px 32px !important;
    font-size: 16px !important;
    font-weight: 700 !important;
    border-radius: 5px !important;
    cursor: pointer !important;
    letter-spacing: 0.02em !important;
    transition: background 0.2s !important;
}

.pivotal-booklet .gform_wrapper .gform_footer input[type="submit"]:hover,
.pivotal-booklet .gform_wrapper input[type="submit"]:hover {
    background: #4a8424 !important;
}

.pivotal-booklet .gform_wrapper .validation_error {
    border-color: #e8622a !important;
    color: #c4501e !important;
    background: #fff4f0 !important;
}

.pivotal-booklet .gform_wrapper .gfield_error input,
.pivotal-booklet .gform_wrapper .gfield_error textarea {
    border-color: #e8622a !important;
}

/* ── Responsive ────────────────────────────────────── */

@media (max-width: 640px) {
    .pivotal-booklet {
        padding: 0 12px;
        margin-top: 20px;
    }

    .pivotal-booklet__header {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
    }

    .pivotal-booklet__header-contact {
        text-align: left;
    }

    .pivotal-booklet__tab-btn {
        padding: 10px 16px;
        font-size: 14px;
    }

    .pivotal-booklet h1 {
        font-size: 20px;
    }

    .pivotal-booklet h2 {
        font-size: 15px;
    }

    .pivotal-booklet__toc-grid {
        grid-template-columns: 1fr;
        grid-template-rows: none;
        grid-auto-flow: row;
    }
}

#pib-panel-easy-read .ginput_container_signature,
#pib-panel-easy-read .gform_signature_container,
#pib-panel-easy-read .gform_signature_container canvas,
#pib-panel-easy-read canvas.gform_signature {
    width: 100% !important;
    max-width: 100% !important;
}

.pivotal-booklet .ginput_container_signature,
.pivotal-booklet .gform_signature_container,
.pivotal-booklet .gform_signature_container canvas,
.pivotal-booklet canvas.gform_signature {
    width: 100% !important;
    max-width: 100% !important;
}

</style>

<div class="pivotal-booklet">

    <!-- ── Site Logo + Contact ─────────────────────── -->
    <div class="pivotal-booklet__header">
        <div class="site-logo">
            <?php
            $logo_id  = get_theme_mod( 'custom_logo' );
            $logo_src = $logo_id ? wp_get_attachment_image_url( $logo_id, 'medium' ) : '';
            if ( $logo_src ) {
                echo '<img src="' . esc_url( $logo_src ) . '" alt="Pivotal Connect">';
            } else {
                echo '<strong style="font-size:20px;color:#5a9e2f;">Pivotal Connect</strong>';
            }
            ?>
        </div>
        <div class="pivotal-booklet__header-contact">
            <strong>Pivotal Connect</strong><br>
            PO Box 809 Redbank Plains Qld 4301<br>
            <a href="tel:0730633261">07 3063 3261</a> &nbsp;|&nbsp;
            <a href="mailto:info@pivotalconnect.com.au">info@pivotalconnect.com.au</a><br>
            <a href="https://pivotalconnect.com.au" target="_blank">pivotalconnect.com.au</a>
        </div>
    </div>

    <!-- ── Tab Navigation ─────────────────────────── -->
    <div class="pivotal-booklet__tab-nav" role="tablist">
        <button class="pivotal-booklet__tab-btn is-active"
                role="tab"
                aria-selected="true"
                aria-controls="pib-panel-easy-read"
                id="pib-tab-easy-read">
            Easy Read
        </button>
        <button class="pivotal-booklet__tab-btn"
                role="tab"
                aria-selected="false"
                aria-controls="pib-panel-standard"
                id="pib-tab-standard">
            Standard
        </button>
    </div>

    <!-- ════════════════════════════════════════════ -->
    <!-- TAB 1: EASY READ                            -->
    <!-- ════════════════════════════════════════════ -->
    <div class="pivotal-booklet__tab-panel is-active"
         id="pib-panel-easy-read"
         role="tabpanel"
         aria-labelledby="pib-tab-easy-read">

        <div class="pivotal-booklet__doc-header">
            <h1>PARTICIPANT INFORMATION <br>BOOKLET</h1>
            <div class="pivotal-booklet__subtitle">(Easy Read)</div>
            <div class="pivotal-booklet__org">Pivotal Connect</div>
        </div>

        <h2>1. WELCOME</h2>
        <p>Welcome to Pivotal Connect!</p>
        <p>We look forward to working with you and supporting you to achieve your goals!</p>
        <p>For more information about Pivotal Connect:</p>
        <ul>
            <li>Call <a href="tel:0730633261">07 3063 3261</a></li>
            <li>Email <a href="mailto:info@pivotalconnect.com.au">info@pivotalconnect.com.au</a></li>
            <li>Visit <a href="https://pivotalconnect.com.au" target="_blank">https://pivotalconnect.com.au</a></li>
        </ul>

        <h2>2. OUR SERVICES</h2>
        <p>At Pivotal Connect, we provide high quality services and supports in the following areas:</p>
        <ol class="pib-sub-list" type="a">
            <li>
                <strong>a. In-Home and Community Supports</strong>
                <ol class="pib-sub-list-inner" type="i">
                    <li>i. Assistance in Coordinating or Managing Life States, Transitions And Supports</li>
                    <li>ii. Daily Personal Activities</li>
                    <li>iii. Assistance with Travel/Transport Arrangements</li>
                    <li>iv. Innovative Community Participation</li>
                    <li>v. Development of Daily Living and Life Skills</li>
                    <li>vi. Household Tasks</li>
                    <li>vii. Participation in Community, Social and Civic Activities</li>
                </ol>
            </li>
            <li>
                <strong>b. Supported Independent Living/Respite Care/Group</strong>
                <ol class="pib-sub-list-inner" type="i">
                    <li>i. Assistance with Daily Life Tasks in a Group or Shared Living Arrangement</li>
                    <li>ii. Group and Centre Based Activities</li>
                </ol>
            </li>
            <li>
                <strong>c. Employment related supports</strong>
                <ol class="pib-sub-list-inner" type="i">
                    <li>i. Assistance to Access and Maintain Employment or Higher Education</li>
                    <li>ii. Specialised Supported Employment</li>
                </ol>
            </li>
            <li>
                <strong>d. Professional Registration Groups</strong>
                <ol class="pib-sub-list-inner" type="i">
                    <li>i. Implementing Behaviour Support Plans</li>
                    <li>ii. Exercise Physiology and Personal Training</li>
                    <li>iii. Specialised Support Coordination</li>
                    <li>iv. Specialist Disability Accommodation</li>
                </ol>
            </li>
            <li>
                <strong>e. Product related groups</strong>
                <ol class="pib-sub-list-inner" type="i">
                    <li>i. Assistive Products for Personal Care and Safety</li>
                    <li>ii. Personal Mobility Equipment</li>
                </ol>
            </li>
        </ol>

        <h2>3. OUR PROCESS</h2>
        <p>We will arrange a time to meet with you.</p>
        <p>We will discuss the terms of the Service Agreement at the meeting, and how we can best support you.</p>
        <p>After the meeting, we will review your information to make sure we can help you.</p>
        <p>If we can help, we will complete and sign a Service Agreement.</p>
        <p>You will then read the Service Agreement, and if you are happy with the terms, we will ask you to sign and return it to us.</p>
        <p>Once we both sign it, an agreement is formed between us.</p>

        <h2>4. SUPPORT PLANNING</h2>
        <p>We will conduct an assessment to understand your needs and goals.</p>
        <p>We want you to be involved in this process, so we will include you and any people you want in this process.</p>
        <p>After this, we will develop a Participant Support Plan.</p>
        <p>We will ask you to review your plan, and if you are happy and agree to it, you will be asked to sign your plan.</p>
        <p>Your plan will be reviewed regularly, and we will ask for your feedback during this review.</p>

        <h2>5. OUR STAFF</h2>
        <p>We employ qualified and experienced staff.</p>
        <p>All of our staff have completed the required training and obtained the necessary checks.</p>
        <p>We do our best to find the best match for you, based on your preferences.</p>

        <h2>6. YOUR RIGHTS</h2>
        <p>You have the right to:</p>
        <ul>
            <li>Be treated with respect, dignity and courtesy.</li>
            <li>Autonomy including your right to intimacy and sexual expression.</li>
            <li>Privacy of your personal information.</li>
            <li>Be communicated with in a mode and manner that works best for you.</li>
            <li>Be consulted on decisions about how your supports are provided.</li>
            <li>Self-determination and decision making.</li>
            <li>Be supported to achieve your goals, physically, socially and emotionally.</li>
            <li>Have your support tailored to suit your individual and cultural needs and preferences.</li>
            <li>Be supported to raise any concerns or complaints.</li>
        </ul>

        <h2>7. CONFLICT OF INTEREST</h2>
        <p>If we are authorised to provide you with support coordination alongside other supports, a conflict of interest may arise.</p>
        <p>We will always inform you of other providers who can provide the necessary support.</p>
        <p>You can exercise choice and control in choosing the support you receive from Pivotal Connect.</p>
        <p>If we provide support coordination to you, we will always provide 3 quotes (if possible) from other services as well.</p>
        <p>It is then your choice to decide if you would like to choose Pivotal Connect to provide that service and support, or go with another provider.</p>

        <h2>8. PRIVACY</h2>
        <p>We value and respect your right to privacy.</p>
        <p>We need to collect your personal information so that we can do our best to support you and your needs.</p>
        <p>You can update or change your personal information we have anytime.</p>
        <p>We adhere to our Privacy and Information Management Policy, which we are happy to provide to you.</p>

        <h2>9. FEEDBACK AND COMPLAINTS</h2>
        <p>If you wish to provide us with a complaint or feedback, we encourage you to raise this with us first, so we can resolve any issues quickly. You can make a complaint:</p>
        <ul>
            <li>In person to the Director or a staff member;</li>
            <li>Verbally by telephone to <a href="tel:0730633261">07 3063 3261</a>;</li>
            <li>By email to <a href="mailto:info@pivotalconnect.com.au">info@pivotalconnect.com.au</a>;</li>
            <li>On our website <a href="https://pivotalconnect.com.au" target="_blank">https://pivotalconnect.com.au</a>; or</li>
            <li>By post to PO Box 809 Redbank Plains Qld 4301</li>
        </ul>
        <p>If you want to make a complaint anonymously, you can send our Feedback and Complaints Form to our postal address listed above, or you can access assistance by choosing an advocate who can contact us on your behalf.</p>
        <p>You can make a complaint to the NDIS Commission by:</p>
        <ul>
            <li>Phone: 1800 035 544 or TTY 133 677 (Interpreters can be arranged);</li>
            <li>National Relay Service and ask for 1800 035 544; or</li>
            <li>Visiting <a href="https://www.ndiscommission.gov.au/about/complaints" target="_blank">https://www.ndiscommission.gov.au/about/complaints</a> and filling out a complaint contact form.</li>
        </ul>
        <p>We will resolve complaints promptly in accordance with our Feedback and Complaints Policy.</p>

        <h2>10. INCIDENT MANAGEMENT</h2>
        <p>We manage any incident in accordance with our Incident Management Policy.</p>
        <p>We follow strict procedures when reporting Reportable Incidents to the NDIS Commission and any other relevant body.</p>

        <h2>11. EMERGENCY AND DISASTERS</h2>
        <p>We have Emergency and Disaster Management Plans to make sure that you are safe and you can still access support.</p>
        <p>We will develop a plan with you about what you need if an emergency or disaster happens.</p>

        <h2>12. EXITING OUR SERVICE</h2>
        <p>If you wish to leave our services, you can do so in accordance with the terms of our Service Agreement.</p>
        <p>We will support you to find other services if you require assistance.</p>
        <p>We will provide any information during this process to assist you with the transition.</p>

        <h2>13. CAN SOMEONE SPEAK ON MY BEHALF?</h2>
        <p>We want to communicate with you in a way that you understand.</p>
        <p>You have the right to be supported by an advocate at any time.</p>
        <p>If you need an advocate to express your concerns or if you need extra support, please follow the link provided below to find advocate services in your state:</p>
        <p><a href="https://www.dana.org.au/find-an-advocate/" target="_blank">https://www.dana.org.au/find-an-advocate/</a></p>
        <p>If you need help accessing an advocate or interpreter, we can assist you.</p>

        <!-- ── Blank form download ───────────────── -->
        <div class="pivotal-booklet__download-section">
            <p>Prefer to fill this out by hand? Download a blank copy of the form instead:</p>
            <div class="pivotal-booklet__download-buttons">
                <a class="cleenhearts-btn-two" href="<?php echo esc_url( content_url( '/uploads/policies/Participant Information Booklet.pdf' ) ); ?>">Download Standard Form</a>
                <a class="cleenhearts-btn-two" href="<?php echo esc_url( content_url( '/uploads/policies/Participant Information Booklet (Easy Read).pdf' ) ); ?>">Download Easy Read Form</a>
            </div>
        </div>

        <!-- ── Gravity Form ──────────────────────── -->
        <div class="pivotal-booklet__form-section">
            <h3>Participant / Representative Details</h3>
            <?php echo do_shortcode( '[gravityform id="' . PIB_FORM_ID_EASY_READ . '" title="false" description="false" ajax="true"]' ); ?>
        </div>

    </div><!-- /easy-read panel -->


    <!-- ════════════════════════════════════════════ -->
    <!-- TAB 2: STANDARD                             -->
    <!-- ════════════════════════════════════════════ -->
    <div class="pivotal-booklet__tab-panel"
         id="pib-panel-standard"
         role="tabpanel"
         aria-labelledby="pib-tab-standard">

        <div class="pivotal-booklet__doc-header">
            <div class="pivotal-booklet__org" style="margin-bottom:4px">Pivotal Connect</div>
            <h1>PARTICIPANT <br>INFORMATION <br>BOOKLET</h1>
        </div>

        <!-- Table of Contents -->
        <div class="pivotal-booklet__toc">
            <h3>Contents</h3>
            <div class="pivotal-booklet__toc-grid">
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">1.</span><span>Welcome</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">2.</span><span>Our Commitment to You</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">3.</span><span>Our Services</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">4.</span><span>Our Process</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">5.</span><span>Support Planning</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">6.</span><span>Our Staff</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">7.</span><span>Code of Conduct</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">8.</span><span>What We Expect from You</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">9.</span><span>What to Expect from Us</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">10.</span><span>Fees</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">11.</span><span>Conflict of Interest</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">12.</span><span>Privacy</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">13.</span><span>Your Safety</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">14.</span><span>Feedback and Complaints</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">15.</span><span>Incident Management</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">16.</span><span>Emergency and Disasters</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">17.</span><span>Exiting Service</span></div>
                <div class="pivotal-booklet__toc-row"><span class="pivotal-booklet__toc-num">18.</span><span>Can Someone Speak on My Behalf?</span></div>
            </div>
        </div>

        <h2>1. WELCOME</h2>
        <p>Welcome to Pivotal Connect!</p>
        <p>We are committed to delivering high-quality support and services, and we look forward to working with you and supporting you to achieve your goals.</p>
        <p>This Participant Information Booklet has been designed to:</p>
        <ul>
            <li>Provide you with some important information about us and the services we offer</li>
            <li>Assist you to know who to contact when you need to</li>
            <li>Provide you with information about our obligations to you and your responsibilities to us</li>
        </ul>
        <p>For more information about Pivotal Connect:</p>
        <ul>
            <li>Call <a href="tel:0730633261">07 3063 3261</a></li>
            <li>Email <a href="mailto:info@pivotalconnect.com.au">info@pivotalconnect.com.au</a></li>
            <li>Visit <a href="https://pivotalconnect.com.au" target="_blank">https://pivotalconnect.com.au</a></li>
        </ul>

        <h2>2. OUR COMMITMENT TO YOU</h2>
        <p>Our dedication lies with upholding the principles and goals of the NDIS. We hold the belief that individuals with disabilities should:</p>
        <ul>
            <li>Receive reasonable and necessary supports</li>
            <li>Have the freedom to make choices in pursuing their objectives and the planning and delivery of their supports</li>
            <li>Be supported to participant in and contribute to social and economic life to the extent of their ability</li>
            <li>Obtain assistance beyond the scope of the NDIS and be aided in synchronising these services with those offered under the NDIS</li>
        </ul>

        <h2>3. OUR SERVICES</h2>
        <p>At Pivotal Connect, we provide high quality services and supports in the following areas:</p>
        <ol class="pib-sub-list">
            <li>
                <strong>a. In-Home and Community Supports</strong>
                <ol class="pib-sub-list-inner">
                    <li>i. Assistance in Coordinating or Managing Life States, Transitions And Supports</li>
                    <li>ii. Daily Personal Activities</li>
                    <li>iii. Assistance with Travel/Transport Arrangements</li>
                    <li>iv. Innovative Community Participation</li>
                    <li>v. Development of Daily Living and Life Skills</li>
                    <li>vi. Household Tasks</li>
                    <li>vii. Participation in Community, Social and Civic Activities</li>
                </ol>
            </li>
            <li>
                <strong>b. Supported Independent Living/Respite Care/Group</strong>
                <ol class="pib-sub-list-inner">
                    <li>i. Assistance with Daily Life Tasks in a Group or Shared Living Arrangement</li>
                    <li>ii. Group and Centre Based Activities</li>
                </ol>
            </li>
            <li>
                <strong>c. Employment related supports</strong>
                <ol class="pib-sub-list-inner">
                    <li>i. Assistance to Access and Maintain Employment or Higher Education</li>
                    <li>ii. Specialised Supported Employment</li>
                </ol>
            </li>
            <li>
                <strong>d. Professional Registration Groups</strong>
                <ol class="pib-sub-list-inner">
                    <li>i. Implementing Behaviour Support Plans</li>
                    <li>ii. Exercise Physiology and Personal Training</li>
                    <li>iii. Specialised Support Coordination</li>
                    <li>iv. Specialist Disability Accommodation</li>
                </ol>
            </li>
            <li>
                <strong>e. Product related groups</strong>
                <ol class="pib-sub-list-inner">
                    <li>i. Assistive Products for Personal Care and Safety</li>
                    <li>ii. Personal Mobility Equipment</li>
                </ol>
            </li>
        </ol>
        <p>Our service delivery approach consists in the following:</p>
        <ul>
            <li><strong>Person-Centred Approach:</strong> We believe in a person-centred approach, which means that your goals, preferences, and needs are at the forefront of our service delivery. We respect your choices and decisions and drive to provide support that is meaningful to you.</li>
            <li><strong>Individual Goal Setting:</strong> We will work collaboratively with you to set clear and achievable goals. Your goals will form the basis of your support plan and guide our interventions to ensure we are working towards your desired outcome.</li>
            <li><strong>Support Planning:</strong> Our team will assist you in developing a support plan that outlines the specific services and supports you require. This plan will be regularly reviewed to ensure it continues to meet your evolving needs.</li>
            <li><strong>Regular Review and Feedback:</strong> We value your feedback and encourage open communication. We will regularly review your progress and seek your input to make any necessary adjustments to your support plan or service delivery.</li>
        </ul>

        <h2>4. OUR PROCESS</h2>
        <p><strong>Eligibility</strong></p>
        <p>We provide services to individuals who meet specific eligibility criteria. You may qualify for services and support from Pivotal Connect if you:</p>
        <ul>
            <li>Are a person with a disability within the age range permitted by Pivotal Connect's NDIS registration.</li>
            <li>Reside in proximity to Pivotal Connect's operational location.</li>
            <li>Require assistance from Pivotal Connect for a service or support listed in the "Our Services" section above.</li>
            <li>Have access to funding, whether that be government or private funding</li>
        </ul>
        <p><strong>Initial meeting</strong></p>
        <p>We will arrange a meeting to get to know you, discuss your needs, and request copies of your NDIS Plan and other relevant documentation so we are well-equipped to provide you with the assistance you require.</p>
        <p><strong>Service agreement</strong></p>
        <p>Once you have chosen us as your service provider, we will work with you to develop a service agreement. This agreement outlines the supports you will receive, associated costs, and terms of service delivery. Should you fully understand and be satisfied with the terms laid out in the Service Agreement, we will request your signature and ask you to return the agreement to Pivotal Connect for formal execution. Upon Pivotal Connect's execution of the agreement, both parties will be legally bound by its terms.</p>

        <h2>5. SUPPORT PLANNING</h2>
        <p>Once you have begun utilising our services, we will conduct an assessment to better understand your needs, strengths and desires. You will actively participate in this assessment and have the option to involve an advocate, your family, or anyone else you choose. You will receive a copy of the assessment for your records.</p>
        <p>Following the assessment, we will collaborate with you, your support team, family, and any chosen advocates to develop and document a personalised support plan. This plan will be tailored to complement your strengths, address your needs, and align with the existing support network.</p>
        <p>To acknowledge your involvement in the development of the support plan, we will request your signature. You will also receive a copy of the plan for your reference. Regular plan review will be conducted to assess your progress and accommodate any changes you wish to make to the support being provided.</p>
        <p>As an NDIS registered provider, we uphold the requirements of relevant legislation and funding agreements, ensuring that we meet your expectations and deliver a high standard of service. Our commitment to excellence extends to adhering to the NDIS Practice Standards, ensuring that our support and services are in accordance with your NDIS Plan.</p>

        <h2>6. OUR STAFF</h2>
        <p>At Pivotal Connect, we employ qualified and experienced staff who are dedicated to providing high quality supports and services. All staff are required to provide Pivotal Connect with evidence they have obtained the necessary checks (police clearance and Working with Children Check) and have completed the required training as per the NDIS requirements.</p>
        <p>As Pivotal Connect, we understand the importance of finding the right Worker who can meet your needs and help you achieve your goals. We take into consideration various factors such as personality, language, culture, and skills requirements when assessing the best match for you.</p>
        <p>We highly value your input and if you have a preference for one or more specific Workers, we will make every effort to accommodate your request. However, the feasibility of accommodating your preference depends on factors such as qualifications, competence, availability, and suitability of the Worker in relation to your specific needs and goals.</p>
        <p>We strongly encourage your active involvement in the process of matching your needs with the right Worker. Your opinion is highly valued, and we appreciate your insights. Additionally, if you wish to have an advocate by your side during this process, we are here to support you in accessing the advocate of your choice.</p>

        <h2>7. CODE OF CONDUCT</h2>
        <p>Pivotal Connect and its staff comply with the NDIS Code of Conduct. Pivotal Connect and its staff must:</p>
        <ul>
            <li>Act with respect for individual rights to freedom of expression, self-determination, and decision-making in accordance with relevant laws and conventions</li>
            <li>Respect the privacy of people with disability</li>
            <li>Provide supports and services in a safe and competent manner with care and skill</li>
            <li>Act with integrity, honesty, and transparency</li>
            <li>Promptly take steps to raise and act on concerns about matters that might have an impact on the quality and safety of supports provided to people with disability</li>
            <li>Take all reasonable steps to prevent and respond to all forms of violence, exploitation, neglect, and abuse of people with disability</li>
            <li>Take all reasonable steps to prevent and respond to sexual misconduct.</li>
        </ul>

        <h2>8. WHAT WE EXPECT FROM YOU</h2>
        <p>You and your Representatives agree to:</p>
        <ul>
            <li>Inform Pivotal Connect about how you wish the Services to be delivered to meet your needs;</li>
            <li>Collaborate and actively participate in the development and review of your NDIS plan;</li>
            <li>Provide accurate and up-to-date information necessary for the delivery of services, including relevant medical, personal and contact details;</li>
            <li>Communicate openly and honestly with Pivotal Connect, and inform of any concerns you have with any of the Services being provided;</li>
            <li>Treat all Pivotal Connect's staff, workers and others present during the delivery of support and services with courtesy and respect;</li>
            <li>Give Pivotal Connect the required notice if you cannot make a scheduled appointment, noting that if the notice is not provided, Pivotal Connect's cancellation policy will apply;</li>
            <li>Pay all invoices for agreed services, transport and/or other expenses promptly; and</li>
            <li>Immediately notify Pivotal Connect if there is a change to your NDIS plan, if it is suspended, replaced by a new plan, or if you stop being an NDIS participant.</li>
        </ul>

        <h2>9. WHAT TO EXPECT FROM US</h2>
        <p>Pivotal Connect will:</p>
        <ul>
            <li>Once agreed, provide supports that meet your needs and at your preferred times;</li>
            <li>Communicate openly and honestly in a timely manner;</li>
            <li>Treat you with respect, dignity and courtesy;</li>
            <li>Guarantee our sensitivity towards your culture, diversity, values, and beliefs, and your right to express and practice these;</li>
            <li>Consult you on decisions about how supports are provided;</li>
            <li>Give you information about managing any complaints or disagreements and details of Pivotal Connect's cancellation policy;</li>
            <li>Support you to give feedback or make a complaint about service provision without any retribution;</li>
            <li>Listen to your feedback and complaints, and resolve problems quickly;</li>
            <li>Give you a minimum of 24 hours' notice if Pivotal Connect has to change a scheduled appointment to provide supports;</li>
            <li>Protect your privacy and confidential information;</li>
            <li>Respect your right to autonomy, intimacy and sexual expression;</li>
            <li>Provide information to you in way that is accessible to you;</li>
            <li>Review the provision of supports at least annually with you;</li>
            <li>Provide supports in a manner consistent with all relevant laws, including the NDIS Act 2013 and Rules, and the Australian Consumer Law; and</li>
            <li>Keep accurate records on the supports provided to you.</li>
        </ul>

        <h2>10. FEES</h2>
        <p>The Service Agreement contains detailed information about the services we will provide you, the associated fees, and when payments must be made. This must be agreed upon before services can commence.</p>

        <h2>11. CONFLICT OF INTEREST</h2>
        <p>In situations where Pivotal Connect is authorised to provide support coordination alongside other supports, it is essential to address the potential conflict of interest that may arise.</p>
        <p>We are committed to transparency and ensuring that you have full control over the support you receive. As such, we will always inform you of alternative providers who are available to offer the necessary support. This empowers you to exercise your right to choice and control in selecting the support that best suits your needs, including considering options outside of Pivotal Connect.</p>
        <p>If there are any relevant conflicts with other providers that have a relationship with Pivotal Connect, we will disclose this information to you. It is important that you are fully informed when making decisions regarding your support.</p>
        <p>In the specific context of support coordination services, we take proactive measures to manage any perceived or actual conflicts of interest. When obtaining quotes for services on your behalf, we will strive to provide three quotes (if possible) from other service providers in addition to our own. This ensures that you have a range of options to consider.</p>
        <p>Ultimately, the decision to choose Pivotal Connect's services and support or to opt for an alternative providers rests entirely with you. Your choice will have no impact on the services or support provided by Pivotal Connect. We are committed to delivering the highest level of support and ensuring that your decisions are respected and honoured.</p>

        <h2>12. PRIVACY</h2>
        <p>At Pivotal Connect, we value and respect your privacy rights. We are committed to maintaining the confidentiality of your personal information in accordance with legislative requirements.</p>
        <p>We collect personal and sensitive information to effectively assess, plan and deliver high quality services tailored to your individual needs.</p>
        <p>In certain circumstances, it may be necessary for Pivotal Connect to disclose your personal information to deliver services or comply with legal obligations. We will only disclose personal information outside of Pivotal Connect when you have given consent, when it aligns with the purpose for which the information was collected, and/or when there is a legal requirement to do so. In some cases, information may be disclosed without your consent if mandated or authorised by law.</p>
        <p>You have the right to request access to and update/change the personal information held by Pivotal Connect. If you wish to exercise this right, please contact us directly. For further information regarding our storage and usage of personal information, we are happy to provide you with copies of our Privacy and Information Management Policy.</p>

        <h2>13. YOUR SAFETY</h2>
        <p>Pivotal Connect will endeavor to provide a safe environment for you and a safe workplace for our staff. We do not tolerate any form of harassment, bullying or discrimination or other form of unacceptable conduct. Any form of physical, verbal, sexual or threatening behavior, intentional or unintentional, is not acceptable and will not be tolerated. Our Incident Management and Reporting Policy will be used to manage these situations if they arise.</p>
        <p>We encourage an environment where clients and staff are treated with dignity and respect and where staff conducts themselves professionally at all times.</p>
        <p>As a person using our services you have a right to feel safe and be free from abuse and neglect. We have a complaints process which you should use if you feel unsafe. If you feel you need an advocate to make a complaint or report any inappropriate behaviour we can support you to access an advocate of your choice.</p>

        <h2>14. FEEDBACK AND COMPLAINTS</h2>
        <p>Pivotal Connect values and recognises the importance of receiving feedback and complaints, in order for us to better serve and support you. If you wish to provide us with a complaint or feedback, you can do so:</p>
        <ul>
            <li>In person to the Director or a staff member;</li>
            <li>Verbally by telephone to <a href="tel:0730633261">07 3063 3261</a>;</li>
            <li>By email to <a href="mailto:info@pivotalconnect.com.au">info@pivotalconnect.com.au</a>;</li>
            <li>On our website <a href="https://pivotalconnect.com.au" target="_blank">https://pivotalconnect.com.au</a>. Or</li>
            <li>By post to PO Box 809 Redbank Plains Qld 4301</li>
        </ul>
        <p>For all written complaints or feedback, we encourage you to provide your complaint in the form of our written Feedback and Complaints Form.</p>
        <p>If you wish to make a complaint anonymously, you can do so via sending our Feedback and Complaints Form to our postal address listed above, or you can access assistance by choosing an advocate who can contact us on your behalf.</p>
        <p>You can make a complaint to the NDIS Commission by:</p>
        <ul>
            <li>Phone: 1800 035 544 or TTY 133 677 (Interpreters can be arranged);</li>
            <li>National Relay Service and ask for 1800 035 544; or</li>
            <li>Visiting <a href="https://www.ndiscommission.gov.au/about/complaints" target="_blank">https://www.ndiscommission.gov.au/about/complaints</a> and filling out a complaint contact form.</li>
        </ul>
        <p>The NDIS Commission can take complaints from anyone about:</p>
        <ul>
            <li>NDIS services or supports that were not provided in a safe and respectful way</li>
            <li>NDIS services and supports that were not delivered to an appropriate standard</li>
        </ul>
        <p>We will resolve complaints promptly in accordance with our Feedback and Complaints Policy.</p>

        <h2>15. INCIDENT MANAGEMENT</h2>
        <p>Pivotal Connect is committed to ensuring that an incident management system is maintained that complies with the requirements under the NDIS Scheme (Incident Management and Reportable Incidents) Rules 2018. Our Incident Management System is documented in accordance with our Incident Management Policy. If you would like a copy of the policy, we would be pleased to provide a copy to you.</p>
        <p>If you observe or are the subject of an incident that does or could cause permanent or temporary detriment to you or another person, you must report this incident to us. You will be protected against any adverse actions, as a result of reporting or alleging that an incident has occurred. There will be no negative consequences for reporting incidents.</p>
        <p>Incidents that occur in relation to the provision of Pivotal Connect's services are managed consistently and effectively in accordance with our Incident Management Policy. This policy includes procedures that we consistently follow to assess, investigate and resolve incidents. We also have procedures in place to help support you in relation to incidents which may impact or affect you.</p>

        <h2>16. EMERGENCY AND DISASTERS</h2>
        <p>We are committed to the safety, health, and wellbeing of its NDIS participants and workers. To uphold this commitment, we have established this Emergency and Disaster Management Policy to guide our actions during emergencies or disasters. This policy adheres to the NDIS Practice Standards and seeks to ensure the health, safety, and wellbeing of all Participants and Personnel before, during, and after emergencies or disasters.</p>
        <p>In the event of an emergency or disaster, our workers will be trained to follow the procedures set out in the Emergency Management Plan, ensuring you are safe, and your supports are maintained during this time.</p>
        <p>A Participant Emergency Plan will be completed in collaboration with you and your representative/family, to ensure your specific support needs are taken care of and appropriate procedures are in place during an emergency.</p>

        <h2>17. EXITING SERVICE</h2>
        <p>We will not limit any to your support due to a dignity of risk choice that has been made by you.</p>
        <p>You can leave our services at any time and in accordance with the terms of our Services Agreement. We will support you to find other services if you require assistance. If you have consented to do so, we will share any information during this process in collaboration with your new provider to ease this transition.</p>
        <p>Should you wish to return to us at any time our staff will be happy to support you through the intake process.</p>
        <p>From time to time there may be a need for us to advise you that we are no longer able to provide you services. We will only withdraw services if we are permitted to do so in accordance with the terms of our Services Agreement. If this does occur, we will work with you to find and access a provider who is able to support you.</p>

        <h2>18. CAN SOMEONE SPEAK ON MY BEHALF?</h2>
        <p>At Pivotal Connect, we understand the importance of your rights and concerns being represented during service delivery. You have the right to be supported by an advocate at any time, and we encourage their involvement during the assessment and planning process.</p>
        <p>Advocates can be family members, friends, medical practitioners, or from advocacy bodies. If you need assistance in accessing advocacy services, we can provide a list of advocacy bodies upon request. If you need an advocate to express your concerns or if you need extra support, please follow the link provided below to find advocate services in your state:</p>
        <p><a href="https://www.dana.org.au/find-an-advocate/" target="_blank">https://www.dana.org.au/find-an-advocate/</a></p>
        <p>Your voice matters, and we are committed to ensuring that you have the support that you need.</p>

        <!-- ── Gravity Form ──────────────────────── -->
        <div class="pivotal-booklet__download-section">
            <p>Prefer to fill this out by hand? Download a blank copy of the form instead:</p>
            <div class="pivotal-booklet__download-buttons">
                <a class="cleenhearts-btn-two" href="<?php echo esc_url( content_url( '/uploads/policies/Participant Information Booklet.pdf' ) ); ?>">Download Standard Form</a>
                <a class="cleenhearts-btn-two" href="<?php echo esc_url( content_url( '/uploads/policies/Participant Information Booklet (Easy Read).pdf' ) ); ?>">Download Easy Read Form</a>
            </div>
        </div>

        <div class="pivotal-booklet__form-section">
            <h3>Participant / Representative Details</h3>
            <?php echo do_shortcode( '[gravityform id="' . PIB_FORM_ID_STANDARD . '" title="false" description="false" ajax="true"]' ); ?>
        </div>

    </div><!-- /standard panel -->

</div><!-- /.pivotal-booklet -->

<script>
(function () {
    var btns   = document.querySelectorAll('.pivotal-booklet__tab-btn');
    var panels = document.querySelectorAll('.pivotal-booklet__tab-panel');

    btns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var target = this.getAttribute('aria-controls');

            btns.forEach(function (b) {
                b.classList.remove('is-active');
                b.setAttribute('aria-selected', 'false');
            });
            panels.forEach(function (p) {
                p.classList.remove('is-active');
            });

            this.classList.add('is-active');
            this.setAttribute('aria-selected', 'true');
            document.getElementById(target).classList.add('is-active');

            window.scrollTo({ top: document.querySelector('.pivotal-booklet').offsetTop - 20, behavior: 'smooth' });
        });
    });
}());
</script>

<?php get_footer(); ?>