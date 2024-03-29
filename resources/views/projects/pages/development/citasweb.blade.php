@extends('layouts.base-details')

@section('project')
<div class="row text-end fade-in">
    <div class="col">
        <a class="btn" href="{{ route('projects.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
            </svg>
            <span>Close details</span>
        </a>
    </div>
</div>
<div class="row py-2 fade-in">
    <main>
        <h3>Web dating system</h3>
        <span>Frontend (Angular 14.2.0)</span>
        <br><br><br>
        <h5>The challenge</h5>
        <p class="text-start" style="color: #535353;">
            Develop some product or method to provide atenttion to new customers of the company, 
            receives many ever day and they are acumulated.
        </p>
        <h5>Solution</h5>
        <p class="text-start" style="color: #535353;">
            My solution was SAAC; A web system that works like an diary. The system has
            differents roles and each has differents functions and access to different information,
            this to protect sensitive information and optimize the attention process.
        </p>
        <h5>Process</h5>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item bg-white" style="color: #006064;">
                Analysis
                <p class="text-start ms-3" style="color: #535353;">
                    The company provided an example of how they currently stay the customer records for analysis.
                    Subsequently of analysis was defined the schema and the server for the database.
                </p>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Disign of views (low fidelity)
                <p class="text-start ms-3" style="color: #535353;">
                    Beginning with ideas for each view, on analysis previous was defined the data that is manage, 
                    whereby is posible create ideas for the views, how many and which.
                </p>
                <div class="col-md-10 ms-3">
                    <div id="low-fidelity-carousel" class="carousel slide border" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center" data-bs-interval="9000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/low_fidelity_1.webp') }}" alt="design-low-fidelity-1">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/low_fidelity_2.webp') }}" alt="design-low-fidelity-2">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/low_fidelity_3.webp') }}" alt="design-low-fidelity-3">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/low_fidelity_4.webp') }}" alt="design-low-fidelity-4">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/low_fidelity_5.webp') }}" alt="design-low-fidelity-5">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/low_fidelity_6.webp') }}" alt="design-low-fidelity-6">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#low-fidelity-carousel" data-bs-slide="prev" name="prev-low-fidelity" id="prev-low-fidelity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>
                            </svg>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#low-fidelity-carousel" data-bs-slide="next" name="next-low-fidelity" id="next-low-fidelity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                            </svg>
                        </button>
                    </div>
                </div>
                <br>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Disign of views (high fidelity)
                <p class="text-start ms-3" style="color: #535353">
                    Then I realized those ideas in high fidelity before laying then out.
                </p>
                <div class="col-md-10 ms-3">
                    <div id="high-fidelity-carousel" class="carousel slide border" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center" data-bs-interval="10000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_1.webp') }}" alt="design-high-fidelity-1">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_2.webp') }}" alt="design-high-fidelity-2">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_3.webp') }}" alt="design-high-fidelity-3">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_4.webp') }}" alt="design-high-fidelity-4">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_6.webp') }}" alt="design-high-fidelity-6">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_7.webp') }}" alt="design-high-fidelity-7">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_8.webp') }}" alt="design-high-fidelity-8">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_9.webp') }}" alt="design-high-fidelity-9">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_10.webp') }}" alt="design-high-fidelity-10">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#high-fidelity-carousel" data-bs-slide="prev" name="prev-high-fidelity" id="prev-high-fidelity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>
                            </svg>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#high-fidelity-carousel" data-bs-slide="next" name="next-high-fidelity" id="next-high-fidelity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                            </svg>
                        </button>
                    </div>
                </div>
                <br>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Make views
                <p class="text-start ms-3" style="color: #535353;">
                    Was development on Angular version 14.2.0. This framework works by components and
                    each view is considered one component. Each component is formed by 3 files very important
                    (template HTML, style sheet and one TypeScript file).
                </p>
                <div class="col-md-10 ms-3">
                    <div id="evidences-carousel" class="carousel slide border" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center" data-bs-interval="9500">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_1.webp') }}" alt="evidence-1">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_2.webp') }}" alt="evidence-2">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_3.webp') }}" alt="evidence-3">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_4.webp') }}" alt="evidence-4">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_5.webp') }}" alt="evidence-5">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_6.webp') }}" alt="evidence-6">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_7.webp') }}" alt="evidence-7">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#evidences-carousel" data-bs-slide="prev" name="prev-evidences" id="prev-evidences">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>
                            </svg>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#evidences-carousel" data-bs-slide="next" name="next-evidences" id="next-evidences">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                            </svg>
                        </button>
                    </div>
                </div>
                <br>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Communication with the API
                <p class="text-start ms-3" style="color: #535353;">
                    In this part displays only some fragments of TypeScript files, by protection cannot display
                    sensitivity code.
                </p>
                <div class="col-auto ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
/**
 * This function send a request to API, then checks the response received.
 * @param object-data 
 * @returns 
 */
singin(object-data: any) {
    return this.httpClient.post(< destination >, < object-data >)
        .pipe(map((response: any) => {
            if (res.< value > === < value >) {
                sessionStorage.setItem('a', response.< value >)
                sessionStorage.setItem('b', response.< value >)
                sessionStorage.setItem('c', response.< value >)
                sessionStorage.setItem('d', response.< value >)
                sessionStorage.setItem('d', response.< value >)
            }
        }))
    }
                        </code>
                    </pre>
                </div>
                <div class="col-auto ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
/**
 * This function send a request to API and return JSON object as response to component.
 * @param object-data
 * @returns
 */
search(object-data: any) {
    return this.httpClient.post(< destination >, < object-data >)
        .pipe(map((response: any) => {
            return response
        }))
    }
                        </code>
                    </pre>
                </div>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Results
                <p class="text-start ms-3" style="color: #535353">
                    Finally, this is the results of my work.
                </p>
                <div class="col-md-10 ms-3">
                    <div id="results-carousel" class="carousel slide border" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center" data-bs-interval="9000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_1.webp') }}" alt="result-1">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_2.webp') }}" alt="result-2">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_3.webp') }}" alt="result-3">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_4.webp') }}" alt="result-4">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_6.webp') }}" alt="result-6">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_7.webp') }}" alt="result-7">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_8.webp') }}" alt="result-8">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_9.webp') }}" alt="result-9">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#results-carousel" data-bs-slide="prev" name="prev-results" id="prev-results">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>
                            </svg>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#results-carousel" data-bs-slide="next" name="next-results" id="next-results">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                            </svg>
                        </button>
                    </div>
                </div>
                <br>
                <div class="col-md-10 ms-3 border">
                    <img class="img-fluid" src="{{ asset('build/assets/image/other/result_devices.webp') }}" alt="result-devices">
                </div>
                <br>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Other
                <p class="text-start ms-3" style="color: #535353">
                    To garantize the atenttion of the customers, the system include a function that sends 
                    only one email each day with the customers data (if not exists appointments don't sends the email). This email needs
                    be configure by some user with role as Admin.
                </p>
                <div class="col-md-10 ms-3">
                    <img class="img-fluid border" src="{{ asset('build/assets/image/other/result_10.webp') }}" alt="result-10">
                </div>
                <br>
            </li>
        </ol>
        <h5 style="color: #006064;">Note</h5>
        <p class="text-start" style="color: #535353;">
            This App processes, sends and receives data from and to the <a style="color: #006064;" href="{{ route('projects.citasapi') }}">API</a>. 
            All components are protected by session validation active and all information is cleaned, validated and
            preformat before sends request to the API (in the API perform more filters, validates and checks). The 
            examples displayed contain modifications and lines that were removed for privacy, integrity and security 
            of the App.
        </p>
        <h5 style="color: #006064;">Important</h5>
        <p class="text-start" style="color: #535353;">
            This project is private on my GitHub, but I attach evidence of the existence of 
            the repository.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/image/other/evidence_14.webp') }}" alt="evidence-14">
        </div>
        <br>
        <div class="row justify-content-around">
            <div class="col text-start"></div>
            <div class="col text-center">
                <a href="#" id="up" class="btn">
                    <span>Slide up</span>
                </a>
            </div>
            <div class="col text-end">
                <a class="btn" href="{{ route('projects.citasapi') }}">
                    <span>Next</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#006064" viewBox="0 0 16 16">
                        <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                    </svg>
                </a>
            </div>
        </div>
    </main>
</div>
@endsection