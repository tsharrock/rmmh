<style>
    /* Redmond MMH Brand Colors */
    :root {
        --redmond-red: #b32025;
        /* Primary Brand Red */
        --redmond-dark: #1a1a1a;
        /* Dark Charcoal Background */
        --redmond-light: #f4f4f4;
        /* Light Grey Text/Accents */
        --white: #ffffff;
    }

    footer {
        background-color: white;
        color: var(--redmond-dark);
        padding: 60px 20px 30px 20px;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        border-top: 4px solid var(--redmond-red);
    }

    .footer-container {
        max-width: 1100px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 30px;
    }

    @media (min-width: 992px) {
        .footer-container {
            grid-template-columns: repeat(6, 1fr);
        }
    }

    .footer-col h4 {
        color: var(--redmond-red);
        font-size: 0.85rem;
        margin-bottom: 15px;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Red underline accent for headings */
    .footer-col h4::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -8px;
        width: 40px;
        height: 2px;
        background-color: var(--redmond-red);
    }

    .footer-col ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-col ul li {
        margin-bottom: 8px;
    }

    .footer-col ul li a {
        color: var(--redmond-dark);
        text-decoration: none;
        font-size: 0.8rem;
        transition: all 0.3s ease;
    }

    .footer-col ul li a:hover {
        color: var(--redmond-red);
        padding-left: 5px;
    }

    .footer-bottom {
        max-width: 1100px;
        margin: 50px auto 0 auto;
        padding-top: 20px;
        border-top: 1px solid #333;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        font-size: 0.85rem;
        color: #777;
    }

    .footer-bottom p {
        margin: 5px 0;
    }

    @media (max-width: 768px) {
        .footer-bottom {
            flex-direction: column;
            text-align: center;
        }
    }
</style>


<footer>
    <div class="tagline text-center mb-3">
        <h3>Serving Utah, Arizona, Montana & Iowa</h3>
    </div>
    <div class="footer-container">

        <div class="footer-col">
            <h4>Redmond MMH</h4>
            <ul>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('insurance') }}">Accepted Insurance Plans</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Our Services</h4>
            <ul>
                <li><a href="{{ route('psychiatric-care') }}">Psychiatric Care</a></li>
                <li><a href="{{ route('family-medicine') }}">Family Medicine</a></li>
                <li><a href="{{ route('ketamine') }}">Ketamine</a></li>
                <li><a href="{{ route('iv-fluids') }}">IV Nutrition & Injectables</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Utah Telehealth</h4>
            <ul>
                <li><a href="{{ route('logan-cache-valley') }}"><strong>Cache Valley:</strong> All Medical & Mental
                        Health Services</a></li>
                <li><a href="{{ route('telehealth.utah.salt-lake-city') }}"><strong>Salt Lake City:</strong>
                        Telehealth</a></li>
                <li><a href="{{ route('telehealth.utah.ogden') }}"><strong>Ogden:</strong> Telehealth</a></li>
                <li><a href="{{ route('telehealth.utah.provo') }}"><strong>Provo:</strong> Telehealth</a></li>
                <li><a href="{{ route('telehealth.utah.st-george') }}"><strong>St. George:</strong> Telehealth</a></li>
                <li><a href="{{ route('telehealth.utah.cedar-city') }}"><strong>Cedar City:</strong> Telehealth</a>
                </li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Arizona Telehealth</h4>
            <ul>
                <li><a href="{{ route('telehealth.arizona.phoenix') }}"><strong>Phoenix:</strong> Telehealth</a></li>
                <li><a href="{{ route('telehealth.arizona.tucson') }}"><strong>Tucson:</strong> Telehealth</a></li>
                <li><a href="{{ route('telehealth.arizona.mesa') }}"><strong>Mesa:</strong> Telehealth</a></li>
                <li><a href="{{ route('telehealth.arizona.scottsdale') }}"><strong>Scottsdale:</strong> Telehealth</a>
                </li>
                <li><a href="{{ route('telehealth.arizona.tempe') }}"><strong>Tempe:</strong> Telehealth</a></li>
                <li><a href="{{ route('telehealth.arizona.flagstaff') }}"><strong>Flagstaff:</strong> Telehealth</a>
                </li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Montana Telehealth</h4>
            <ul>
                <li><a href="{{ route('telehealth.montana.billings') }}"><strong>Billings:</strong> Telehealth</a></li>
                <li><a href="{{ route('telehealth.montana.missoula') }}"><strong>Missoula:</strong> Telehealth</a></li>
                <li><a href="{{ route('telehealth.montana.great-falls') }}"><strong>Great Falls:</strong>
                        Telehealth</a></li>
                <li><a href="{{ route('telehealth.montana.bozeman') }}"><strong>Bozeman:</strong> Telehealth</a></li>
                <li><a href="{{ route('telehealth.montana.helena') }}"><strong>Helena:</strong> Telehealth</a></li>
                <li><a href="{{ route('telehealth.montana.kalispell') }}"><strong>Kalispell:</strong> Telehealth</a>
                </li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Iowa Telehealth</h4>
            <ul>
                <li><a href="{{ route('telehealth.iowa.des-moines') }}"><strong>Des Moines:</strong> Telehealth</a>
                </li>
                <li><a href="{{ route('telehealth.iowa.cedar-rapids') }}"><strong>Cedar Rapids:</strong> Telehealth</a>
                </li>
                <li><a href="{{ route('telehealth.iowa.davenport') }}"><strong>Davenport:</strong> Telehealth</a></li>
                <li><a href="{{ route('telehealth.iowa.sioux-city') }}"><strong>Sioux City:</strong> Telehealth</a>
                </li>
                <li><a href="{{ route('telehealth.iowa.iowa-city') }}"><strong>Iowa City:</strong> Telehealth</a></li>
                <li><a href="{{ route('telehealth.iowa.waterloo') }}"><strong>Waterloo:</strong> Telehealth</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Redmond Medical & Mental Health. All Rights Reserved.</p>
    </div>
</footer>
