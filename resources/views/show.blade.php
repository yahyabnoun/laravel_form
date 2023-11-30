<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Meet & Greet with Sophia - Inscription</title>
    <link href="{{ asset('image/TAMTECH-02.png') }}" rel="icon">
    <link href="{{ asset('image/TAMTECH-02.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

        /* ------------------------------------------------- */

        .card__ {
            width: 100%;
            height: auto;
            padding: 24px;
            background-color: #FFFFFF;
            margin-bottom: 12px;
            border: 1px solid rgb(218, 220, 224);
            border-radius: 8px;
        }

        .btn {
            background: #4E5FBB;
            color: white;
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style="background-color: #ECEEF8;">
    <div class="container w-100 mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                <form action="{{ route('add') }}" method="POST">
                    @csrf
                    <div class="row card__">
                        <div class="col text-center">
                            <h3 class="mb-3">ChatGPT 101: Empowering Educators with AI</h3>
                            <p class="text-h3">
                                Please fill out this form to help us deliver the most effective training program
                                possible on using this cutting edge technology to enhance your teaching practice.
                            </p>
                        </div>
                    </div>

                    {{-- Name input --}}
                    <div class="row align-items-center mt-4 card__">
                        <div class="col">
                            <div class="d-flex justify-content-between mb-3">
                                <label for="exampleInputEmail1">What is your name?</label>
                                {{-- <label for="exampleInputEmail1">الاسم الكامل</label> --}}
                            </div>
                            <input type="text" name="fullname"
                                class="form-control  @error('fullname') is-invalid @enderror"
                                aria-describedby="emailHelp" value="{{ old('fullname') }}" required>
                            @error('fullname')
                                <small id="emailHelp" class="form-text text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>

                    {{-- email  input --}}
                    <div class="row align-items-center mt-4 card__">

                        <div class="col">
                            <div class="d-flex justify-content-between mb-3">
                                <label for="exampleInputEmail1">What is your email address?</label>
                                {{-- <label for="exampleInputEmail1">البريد الإلكتروني</label> --}}
                            </div>
                            <input type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" aria-describedby="emailHelp"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <small id="emailHelp" class="form-text text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>

                    {{-- teaching input --}}
                    <div class="row align-items-center mt-4 card__">

                        <div class="col">
                            <div class="d-flex justify-content-between mb-3">
                                <label for="exampleInputEmail1">What is your teaching context?</label>
                                {{-- <label for="exampleInputEmail1">مستوى التعليم</label> --}}
                            </div>



                            <input type="checkbox" id="school" name="teaching[]" value="school"
                                {{ in_array('school', old('teaching', [])) ? 'checked' : '' }}>
                            <label for="school">school</label><br>

                            <input type="checkbox" id="university" name="teaching[]" value="university"
                                {{ in_array('university', old('teaching', [])) ? 'checked' : '' }}>
                            <label for="university">university</label><br>

                            <input type="checkbox" id="private_language_school" name="teaching[]"
                                value="private_language_school"
                                {{ in_array('private_language_school', old('teaching', [])) ? 'checked' : '' }}>
                            <label for="private_language_school">private language school</label><br>

                            <input type="checkbox" id="corporate" name="teaching[]" value="corporate"
                                {{ in_array('corporate', old('teaching', [])) ? 'checked' : '' }}>
                            <label for="corporate">corporate</label><br>
                            {{--
                            <input type="checkbox" id="Other" name="teaching[]" value="Other">
                            <label for="Other">Other <input class="" type="text" id="Other" name="teaching_Other" ></label> --}}

                            @error('teaching')
                                <small id="emailHelp" class="form-text text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>
                    </div>

                    {{-- subjects   input --}}
                    <div class="row align-items-center mt-4 card__">

                        <div class="col">
                            <div class="d-flex justify-content-between mb-3">
                                <label for="exampleInputEmail1">What subject(s) do you teach?</label>
                            </div>
                            <input type="text" name="subjectTeaching"
                                class="form-control @error('subjectTeaching') is-invalid @enderror"
                                aria-describedby="emailHelp" value="{{ old('subjectTeaching') }}" required>
                            @error('subjectTeaching')
                                <small id="emailHelp" class="form-text text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>

                    {{-- used ChatGPT for work input --}}
                    <div class="row align-items-center mt-4 card__">

                        <div class="col">
                            <div class="d-flex justify-content-between mb-3">
                                <label for="">To what extent have you already used ChatGPT for
                                    work?</label>
                            </div>
                            <input type="radio" id="not_at_all" name="usedChatGPT" value="not at all"
                                {{ old('usedChatGPT') == 'not at all' ? 'checked' : '' }}>
                            <label for="not_at_all">not at all</label><br>

                            <input type="radio" id="I've_experimented_a_bit" name="usedChatGPT"
                                value="I've experimented a bit">
                            <label for="I've_experimented_a_bit">I've experimented a bit
                            </label><br>

                            <input type="radio" id="I_use_it_regularly" name="usedChatGPT"
                                value="I use it regularly">
                            <label for="I_use_it_regularly">I use it regularly</label><br>

                            @error('usedChatGPT')
                                <small id="emailHelp" class="form-text text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>

                    {{-- interests input --}}
                    <div class="row align-items-center mt-4 card__">

                        <div class="col">
                            <div class="d-flex justify-content-between mb-3">
                                <label for="exampleInputEmail1">Which of the following applications are you interested
                                    in learning more about?</label>
                            </div>
                            {{-- <input type="radio" id="identifying_student_needs" name="interested"
                                value="identifying student needs">

                            <label for="identifying_student_needs">identifying student needs</label><br> --}}

                            <table class="table " >
                                    <tr>
                                        <th></th>
                                        <th>Yes</th>
                                        <th>No</th>
                                    </tr>
                                    <tr>
                                        <td><label >identifying student needs</label>
                                        </td>
                                        <td>
                                            <input type="radio"  name="1"
                                                value="1">
                                        </td>
                                        <td>
                                            <input type="radio"  name="1"
                                                value="0">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label >planning courses</label>
                                        </td>
                                        <td>
                                            <input type="radio" name="2"
                                                value="1">
                                        </td>
                                        <td>
                                            <input type="radio"  name="2"
                                                value="0">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label >creating materials</label>
                                        </td>
                                        <td>
                                            <input type="radio"  name="3"
                                                value="1">
                                        </td>
                                        <td>
                                            <input type="radio"  name="3"
                                                value="0">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label >assessing learning</label>
                                        </td>
                                        <td>
                                            <input type="radio"  name="4"
                                                value="1">
                                        </td>
                                        <td>
                                            <input type="radio"  name="4"
                                                value="0">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label >professional development</label>
                                        </td>
                                        <td>
                                            <input type="radio"  name="5"
                                                value="1">
                                        </td>
                                        <td>
                                            <input type="radio"  name="5"
                                                value="0">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label >helping students use AI for self-study</label>
                                        </td>
                                        <td>
                                            <input type="radio"  name="6"
                                                value="1">
                                        </td>
                                        <td>
                                            <input type="radio"  name="6"
                                                value="0">
                                        </td>
                                    </tr>
                            </table>
                            {{--
                            <input type="radio" id="planning_courses" name="interested" value="planning courses"
                                {{ old('interested') == 'planning courses' ? 'checked' : '' }}>
                            <label for="planning_courses">planning courses</label><br>

                            <input type="radio" id="creating_materials" name="interested"
                                value="creating materials"
                                {{ old('interested') == 'creating materials' ? 'checked' : '' }}>
                            <label for="creating_materials">creating materials</label><br>

                            <input type="radio" id="assessing_learning" name="interested"
                                value="assessing learning"
                                {{ old('interested') == 'assessing learning' ? 'checked' : '' }}>
                            <label for="assessing_learning">assessing learning</label><br>

                            <input type="radio" id="professional_development" name="interested"
                                value="professional development"
                                {{ old('interested') == 'professional development' ? 'checked' : '' }}>
                            <label for="professional_development">professional development</label><br>

                            <input type="radio" id="helping_students_use_AI_for_self-study" name="interested"
                                value="helping students use AI for self-study">
                            <label for="helping_students_use_AI_for_self-study">helping students use AI for
                                self-study</label><br> --}}
                            {{--
                            @error('interested')
                                <small id="emailHelp" class="form-text text-danger">
                                    {{ $message }}
                                </small>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="row align-items-center mt-4 card__">

                        <div class="col">
                            <div class="d-flex justify-content-between mb-3">
                                <label for="exampleInputEmail1">What other questions or concerns do you have about the
                                    practical applications of ChatGPT and other AI tools?</label>
                            </div>
                            <input type="text" name="aiTools"
                                class="form-control @error('aiTools') is-invalid @enderror"
                                aria-describedby="emailHelp" value="{{ old('aiTools') }}" required>
                            @error('aiTools')
                                <small id="emailHelp" class="form-text text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>


                    <div class="row align-items-center mt-4 card__">

                        <div class="col">
                            <div class="d-flex justify-content-between mb-3">
                                <label for="">Select all scheduling options that could work for you:</label>
                                {{-- <label for="exampleInputEmail1">مستوى التعليم</label> --}}
                            </div>



                            <input type="checkbox" id="One_or_two_hours_in_the_evenings_per_week" name="scheduling[]"
                                value="One or two hours in the evenings per week"
                                {{ in_array('One or two hours in the evenings per week', old('scheduling', [])) ? 'checked' : '' }}>
                            <label for="One_or_two_hours_in_the_evenings_per_week">One or two hours in the evenings per
                                week</label><br>

                            <input type="checkbox" id="Saturdays_for_~2_hours" name="scheduling[]"
                                value="Saturdays for ~2 hours"
                                {{ in_array('Saturdays for ~2 hours', old('scheduling', [])) ? 'checked' : '' }}>
                            <label for="Saturdays_for_~2_hours">Saturdays for ~2 hours</label><br>

                            <input type="checkbox" id="One_or_two_full_day_workshops" name="scheduling[]"
                                value="One or two full day workshops"
                                {{ in_array('One or two full day workshops', old('scheduling', [])) ? 'checked' : '' }}>
                            <label for="One_or_two_full_day_workshops">One or two full day workshops</label><br>


                            @error('scheduling')
                                <small id="emailHelp" class="form-text text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>
                    </div>


                    <div class="row align-items-center mt-4 card__">

                        <div class="col">
                            <div class="d-flex justify-content-between mb-3">
                                <label for="exampleInputEmail1">What else would you like to take away from training on
                                    ChatGPT and AI in education?</label>
                            </div>
                            <input type="text" name="trainingOnChatGPT"
                                class="form-control @error('trainingOnChatGPT') is-invalid @enderror"
                                aria-describedby="emailHelp" value="{{ old('trainingOnChatGPT') }}" required>
                            @error('trainingOnChatGPT')
                                <small id="emailHelp" class="form-text text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>


                    {{-- <div class="row align-items-center mt-4">

                        <div class="col">
                            <div class="d-flex justify-content-between">
                                <label for="exampleInputEmail1">Téléphone</label>
                                <label for="exampleInputEmail1">الهاتف</label>
                            </div>
                            <input type="text" name="phone"
                                class="form-control @error('phone') is-invalid @enderror" aria-describedby="emailHelp"
                                value="{{ old('phone') }}" required>
                            @error('phone')
                                <small id="emailHelp" class="form-text text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div> --}}
                    {{-- <div class="row align-items-center mt-4">

                        <div class="col">
                            <div class="d-flex justify-content-between">
                                <label for="exampleInputEmail1">Activité</label>
                                <label for="exampleInputEmail1">نشاط</label>
                            </div>
                            <input type="text" name="activity"
                                class="form-control @error('activity') is-invalid @enderror"
                                aria-describedby="emailHelp" value="{{ old('activity') }}" required>
                            @error('activity')
                                <small id="emailHelp" class="form-text text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div> --}}

                    {{--
                    <div class="row align-items-center mt-4">

                        <div class="col">
                            <div class="d-flex justify-content-between">
                                <label for="exampleInputEmail1">Langues parlées</label>
                                <label for="exampleInputEmail1">لغة</label>
                            </div>
                            <input type="text" name="langue"
                                class="form-control @error('langue') is-invalid @enderror" aria-describedby="emailHelp"
                                value="{{ old('langue') }}" required>

                            <select class="form-control" name="langue" aria-label="Default select example">
                                <option selected disabled>Sélectionner</option>
                                    <option value="Français">Français</option>
                                    <option value="Anglais">Anglais</option>
                                    <option value="Arabe">Arabe</option>
                                    <option value="Autre">Autre</option>
                            </select>

                            @error('langue')
                                <small id="emailHelp" class="form-text text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div> --}}


                    <div class="row justify-content-start mt-4 mb-4">
                        <div class="col">
                            {{-- <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            I Read and Accept <a href="https://www.froala.com">Terms and Conditions</a>
                        </label>
                    </div> --}}
                            <button class="btn mt-4">S'inscrire</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    @if (!empty($success) || Session::has('success'))
        <style>
            .toast-success {
                background-color: #d6f0e0;
                color: #0d6831;
                border-color: #c0e7d0;
            }
        </style>
        <div aria-live="polite" aria-atomic="true" style="z-index: 4000; min-height: 200px;">
            <div class="toast toast-success" style="position: absolute; top: 20px; right: 20px;"
                data-bs-delay="9000">
                {{-- <div class="toast-header toast-success">
        <img src="..." class="rounded mr-2" alt="...">
        <strong class="mr-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> --}}
                <div class="toast-body p-3">
                    <strong class="mr-auto">{{ $success ?? Session::get('success') }}</strong>
                    <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.toast').toast('show');
            });
        </script>
    @endif

    @if (!empty($error) || Session::has('error'))
        <style>
            .toast-danger {
                background-color: #f9e1e5;
                color: #af233a;
                border-color: #f4c8cf;
            }
        </style>
        <div aria-live="polite" aria-atomic="true" style="z-index: 4000; min-height: 200px;">
            <div class="toast toast-danger" style="position: absolute; top: 20px; right: 20px;"
                data-bs-delay="10000">
                {{-- <div class="toast-header toast-success">
        <img src="..." class="rounded mr-2" alt="...">
        <strong class="mr-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> --}}
                <div class="toast-body p-3">
                    <strong class="mr-auto">{{ $error ?? Session::get('error') }}</strong>
                    <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.toast').toast('show');
            });
        </script>
    @endif
</body>

</html>
