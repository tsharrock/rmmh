@extends('layout')

@section('title', 'Accepted Insurance | Redmond Medical & Mental Health | Utah & Arizona')
@section('description', 'View the list of insurance providers accepted at our clinic. We work with Aetna, SelectHealth, BCBS, Humana and many other providers in Utah and Arizona.')
@section('keywords', 'Accepted Insurance Redmond MMH, SelectHealth Utah, Blue Cross Blue Shield, Humana Utah, Arizona Insurance')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    <section id="insurance" class="mb-5">
        <div class="container">
            <div class="row py-5">
                <div class="col text-center"><h1>Accepted Insurance Providers</h1></div>
            </div>
            <div class="row">
                <div class="col-lg-4 offset-lg-2">
                    <h2>Current credentials:</h2>
                    <ul>
                        <li>Aetna</li>
                        <li>Altius/Coventry</li>
                        <li>Beacon Health</li>
                        <li>BIND Benefits</li>
                        <li>Blue Cross Blue Shield of Idaho</li>
                        <li>Blue Cross Blue Shield of Utah</li>
                        <li>Blue Cross Federal</li>
                        <li>CHAMPVA</li>
                        <li>Cigna</li>
                        <li>Deseret Mutual - DMBA</li>
                        <li>EMI Health</li>
                        <li>Great-West (Cigna)</li>
                        <li>HealthChoice Medicaid</li>
                        <li>HealthEZ</li>
                        <li>HealthNet Tricare</li>
                        <li>HealthUtah Physicians Network</li>
                        <li>HealthWest Administrators</li>
                        <li>Humana</li>
                        <li>Medicaid of Utah</li>
                        <li>Medicaid of Idaho</li>
                        <li>Medicare Part B of Utah</li>
                        <li>Medicare Railroad</li>
                        <li>Molina Medicaid</li>
                        <li>Motiv Health</li>
                        <li>MultiPlan/PHCS (Beech Street)</li>
                        <li>Optum Behavioral Health</li>
                        <li>PEHP</li>
                        <li>Regence Blue Cross Blue Shield</li>
                        <li>Samera Health</li>
                        <li>Select Health</li>
                        <li>UMR</li>
                        <li>United Healthcare</li>
                        <li>University of Utah Health Plan / Healthy U</li>
                        <li>Wise</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h2>Pending credentials:</h2>
                    <ul>
                        <li>Triwest Healthcare Alliance</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
