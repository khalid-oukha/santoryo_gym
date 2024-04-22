
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).ready(function () {
    $('#Selectfilterbycategory').change(function () {
        var categorieId = $(this).val();
        console.log(categorieId);
        $.ajax({
            type: 'POST',
            url: '/lessons/filterbycategory',
            data: {
                category: categorieId
            },
            success: function (response) {
                console.log(response);
                displayLessons(response);
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    });
});


function displayLessons(lessons) {
    let lessonsContainer = document.getElementById("lessons_container");
    let lesson_card = document.getElementById("lesson_card");
    lessonsContainer.innerHTML = ""; // Clear the container first

    lessons.forEach(lesson => {
        // Create HTML elements for each lesson
        let lessonHtml = `
        <div class="nk-tb-item">

        <div class="nk-tb-col nk-tb-col-check">
        <div class="custom-control custom-control-sm custom-checkbox notext">
            <input type="checkbox" class="custom-control-input" id="uid3">
            <label class="custom-control-label" for="uid3"></label>
        </div>
    </div>
    <div class="nk-tb-col tb-col-md">
        <a href="#">
            <span class="fw-medium">${lesson.title}</span>
        </a>
    </div>
    <div class="nk-tb-col">
        <a href="#">
            <div class="user-card">
                <div class="user-avatar bg-info">
                    <img class="w-full h-full"
                        src="storage/images/uploads/${lesson.coach.user.image}"
                        alt="">
                </div>
                <div class="user-info">
                    <span
                        class="tb-lead">${lesson.coach.user.firstname}</span>
                    <span>${lesson.coach.user.email}</span>
                </div>
            </div>
        </a>
    </div>
    <div class="nk-tb-col tb-col-lg">
        <span>${lesson.start_at}</span>
    </div>

    <div class="nk-tb-col tb-col-xxl">
        <div class="user-card">
            <div class="user-avatar sm bg-success-dim">
                <em class="icon ni ni-user-fill"></em>
            </div>
            <div class="user-name">
                <span class="tb-lead">${lesson.category.name}</span>
            </div>
        </div>
    </div>
    <div class="nk-tb-col tb-col-md">
        <span class="badge  bg-outline-info">${lesson.category.name}</span>
    </div>

    <div class="nk-tb-col tb-col-mb">
        <span class="tb-amount">${lesson.price} <span
                class="currency">USD</span></span>
    </div>
    <div class="nk-tb-col tb-col-mb">
        <span class="badge  bg-outline-primary">${lesson.status}</span>
    </div>
    <div class="nk-tb-col nk-tb-col-tools">
        <ul class="nk-tb-actions gx-1">

            <li>
                <div class="drodown">
                    <a href="#"
                        class="dropdown-toggle btn btn-icon btn-trigger"
                        data-bs-toggle="dropdown"><em
                            class="icon ni ni-more-h"></em></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <ul class="link-list-opt no-bdr">
                            <li>
                                <div>
                                    <a
                                        href="{{ route('lesson.edit', ['lesson' => $lesson]) }}"><em
                                            class="icon ni ni-edit"></em><span>Edit</span></a>
                                </div>

                            </li>
                            <li>
                                <div>
                                    <a
                                        href="{{ route('lesson.cancel',$lesson) }}"><em
                                            class="icon ni ni-delete-fill"></em><span>Cancel</span></a>
                                </div>
                                <div>
                                    <a
                                        href="{{ route('lesson.done', ['lesson' => $lesson]) }}"><em class="icon ni ni-check-fill-c"></em><span>Done</span></a>
                                </div>

                            </li>
                            <li>
                                <form class="px-4 py-2"
                                    action="{{ route('lesson.destroy', ['lesson' => $lesson]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        onclick="return confirm('Do you really want to Delete ?');"
                                        onclick="return confirm('Do you really want to Delete ?');"
                                        type="submit" href="#modalDelete"><em
                                            class="icon ni ni-trash"></em><span>Remove</span></button>

                                </form>
                            </li>


                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    </div><!-- .nk-tb-item -->
   
    `;

        // Append the HTML for this lesson to the container
        lessonsContainer.innerHTML += lessonHtml;
    });
}


