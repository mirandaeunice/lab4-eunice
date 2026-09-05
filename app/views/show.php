<!DOCTYPE html>

<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Management</title>

    <style>
        /* =========================================
       RESET
    ========================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }


        /* =========================================
       BODY
    ========================================= */

        body {
            min-height: 100vh;
            background:
                linear-gradient(135deg,
                    #f7faff 0%,
                    #eef5ff 50%,
                    #f8fbff 100%);

            padding: 45px 25px;
            color: #172033;
        }


        /* =========================================
       MAIN WRAPPER
    ========================================= */

        .users-page {
            max-width: 1150px;
            margin: auto;
        }


        /* =========================================
       PAGE HEADER
    ========================================= */

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 25px;

            margin-bottom: 22px;
        }


        .header-title {
            display: flex;
            align-items: center;
            gap: 15px;
        }


        .title-icon {
            width: 52px;
            height: 52px;

            border-radius: 16px;

            background:
                linear-gradient(135deg,
                    #1677ff,
                    #0050c8);

            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 22px;

            box-shadow:
                0 12px 25px rgba(22, 119, 255, 0.22);
        }


        .page-header h1 {
            font-size: 25px;
            font-weight: 700;
            letter-spacing: -0.5px;
            color: #14213d;
        }


        .page-header p {
            margin-top: 5px;

            color: #7b8798;
            font-size: 13px;
        }


        /* =========================================
       USER COUNT
    ========================================= */

        .user-count {
            padding: 10px 15px;

            border-radius: 12px;

            background: rgba(255, 255, 255, 0.75);

            border:
                1px solid rgba(22, 119, 255, 0.08);

            color: #1677ff;

            font-size: 13px;
            font-weight: 600;
        }


        /* =========================================
       MAIN CARD
    ========================================= */

        .users-card {
            background: rgba(255, 255, 255, 0.92);

            border:
                1px solid rgba(22, 119, 255, 0.08);

            border-radius: 22px;

            overflow: hidden;

            box-shadow:
                0 18px 50px rgba(35, 72, 130, 0.08);
        }


        /* =========================================
       TOOLBAR
    ========================================= */

        .table-toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;

            padding: 22px 25px;

            border-bottom:
                1px solid #edf1f7;
        }


        .toolbar-left {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }


        .toolbar-left h2 {
            font-size: 16px;
            font-weight: 700;
            color: #172033;
        }


        .toolbar-left span {
            font-size: 12px;
            color: #8a94a6;
        }


        /* =========================================
       SEARCH
    ========================================= */

        .search-wrapper {
            width: 310px;
            position: relative;
        }


        .search-wrapper::before {
            content: "⌕";

            position: absolute;

            left: 15px;
            top: 50%;

            transform: translateY(-52%);

            font-size: 23px;
            font-weight: 300;

            color: #8da0b8;

            pointer-events: none;
        }


        .search-wrapper input {
            width: 100%;

            padding:
                12px 15px 12px 43px;

            border:
                1px solid #e4eaf2;

            border-radius: 12px;

            outline: none;

            background: #f9fbfe;

            color: #172033;

            font-size: 13px;

            transition: 0.25s;
        }


        .search-wrapper input::placeholder {
            color: #9aa7b8;
        }


        .search-wrapper input:focus {
            background: white;

            border-color: #1677ff;

            box-shadow:
                0 0 0 4px rgba(22, 119, 255, 0.1);
        }


        /* =========================================
       TABLE AREA
    ========================================= */

        .table-container {
            width: 100%;
            overflow-x: auto;
        }


        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }


        /* =========================================
       TABLE HEADER
    ========================================= */

        thead {
            background: #fbfcfe;
        }


        th {
            padding: 15px 25px;

            text-align: left;

            font-size: 11px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 0.7px;

            color: #8491a4;

            border-bottom:
                1px solid #edf1f7;
        }


        /* =========================================
       TABLE BODY
    ========================================= */

        td {
            padding: 17px 25px;

            font-size: 13px;

            color: #3d4a5c;

            border-bottom:
                1px solid #f0f3f7;
        }


        tbody tr {
            transition:
                background 0.2s,
                transform 0.2s;
        }


        tbody tr:last-child td {
            border-bottom: none;
        }


        tbody tr:hover {
            background: #f7faff;
        }


        /* =========================================
       ID
    ========================================= */

        .user-id {
            font-weight: 700;
            color: #1677ff;
        }


        /* =========================================
       FIRST NAME
    ========================================= */

        .first-name {
            font-weight: 600;
            color: #243047;
        }


        /* =========================================
       LAST NAME
    ========================================= */

        .last-name {
            color: #536176;
        }


        /* =========================================
       EMAIL
    ========================================= */

        .email {
            color: #718096;
        }


        /* =========================================
       USERNAME
    ========================================= */

        .username {
            display: inline-flex;
            align-items: center;

            padding: 6px 11px;

            border-radius: 8px;

            background: #edf5ff;

            color: #1677ff;

            font-size: 12px;

            font-weight: 600;
        }


        /* =========================================
       PAGINATION
    ========================================= */

        .table-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;

            padding: 20px 25px;

            border-top:
                1px solid #edf1f7;

            background: #fcfdff;
        }


        .pagination-info {
            color: #8793a5;

            font-size: 12px;
        }


        .pagination {
            display: flex;
            align-items: center;
            gap: 6px;
        }


        .pagination button {
            min-width: 36px;
            height: 36px;

            padding: 0 12px;

            border:
                1px solid #e4eaf2;

            border-radius: 9px;

            background: white;

            color: #536176;

            font-size: 12px;

            font-weight: 600;

            cursor: pointer;

            transition: 0.2s;
        }


        .pagination button:hover:not(:disabled) {
            color: #1677ff;

            border-color: #b9d7ff;

            background: #f4f8ff;
        }


        .pagination button.active {
            background: #1677ff;

            border-color: #1677ff;

            color: white;

            box-shadow:
                0 5px 12px rgba(22, 119, 255, 0.22);
        }


        .pagination button:disabled {
            opacity: 0.4;
            cursor: not-allowed;
        }


        #pageNumbers {
            display: flex;
            gap: 6px;
        }


        /* =========================================
       EMPTY STATE
    ========================================= */

        .empty-message {
            text-align: center;
            padding: 30px;

            color: #8a94a6;
        }


        /* =========================================
       RESPONSIVE
    ========================================= */

        @media (max-width: 800px) {

            body {
                padding: 25px 15px;
            }


            .page-header {
                flex-direction: column;
                align-items: flex-start;
            }


            .table-toolbar {
                flex-direction: column;
                align-items: stretch;
            }


            .search-wrapper {
                width: 100%;
            }


            .table-footer {
                flex-direction: column;
                align-items: flex-start;
            }


            .pagination {
                flex-wrap: wrap;
            }

        }


        @media (max-width: 500px) {

            .page-header h1 {
                font-size: 21px;
            }


            .users-card {
                border-radius: 16px;
            }


            .table-toolbar,
            .table-footer {
                padding: 18px;
            }

        }
    </style>
    ```

</head>

<body>


    <main class="users-page">


        <!-- =========================
         PAGE HEADER
    ========================= -->

        <section class="page-header">


            <div class="header-title">

                <div class="title-icon">
                    👥
                </div>


                <div>

                    <h1>User Directory</h1>

                    <p>
                        Manage and view all registered users.
                    </p>

                </div>

            </div>


            <div class="user-count">
                User Management
            </div>


        </section>



        <!-- =========================
         USERS CARD
    ========================= -->

        <section class="users-card">


            <!-- =========================
             TOOLBAR
        ========================= -->

            <div class="table-toolbar">


                <div class="toolbar-left">

                    <h2>Registered Users</h2>

                    <span>
                        Search and browse user information
                    </span>

                </div>


                <!-- SEARCH -->

                <div class="search-wrapper">

                    <input
                        type="text"
                        id="searchInput"
                        placeholder="Search users..."
                        onkeyup="searchEmployee()">

                </div>


            </div>



            <!-- =========================
             TABLE
        ========================= -->

            <div class="table-container">


                <table id="employeeTable">


                    <thead>

                        <tr>

                            <th>User ID</th>

                            <th>First Name</th>

                            <th>Last Name</th>

                            <th>Email Address</th>

                            <th>Username</th>

                        </tr>

                    </thead>



                    <tbody>


                        <?php foreach ($users as $user): ?>


                            <tr>


                                <td class="user-id">

                                    #<?= htmlspecialchars($user['id']); ?>

                                </td>



                                <td class="first-name">

                                    <?= htmlspecialchars($user['firstname']); ?>

                                </td>



                                <td class="last-name">

                                    <?= htmlspecialchars($user['lastname']); ?>

                                </td>



                                <td class="email">

                                    <?= htmlspecialchars($user['email']); ?>

                                </td>



                                <td>

                                    <span class="username">

                                        @<?= htmlspecialchars($user['username']); ?>

                                    </span>

                                </td>


                            </tr>


                        <?php endforeach; ?>


                    </tbody>


                </table>


            </div>



            <!-- =========================
             TABLE FOOTER
        ========================= -->

            <div class="table-footer">


                <div
                    class="pagination-info"
                    id="paginationInfo">

                </div>



                <div class="pagination">


                    <button
                        type="button"
                        id="prevPage"
                        onclick="changePage(-1)">

                        Previous

                    </button>



                    <div id="pageNumbers"></div>



                    <button
                        type="button"
                        id="nextPage"
                        onclick="changePage(1)">

                        Next

                    </button>


                </div>


            </div>


        </section>


    </main>



    <!-- =========================================
     SEARCH + PAGINATION
========================================= -->

    <script>
        const rowsPerPage = 5;


        let currentPage = 1;



        /* =========================
           GET FILTERED ROWS
        ========================= */

        function getFilteredRows() {


            const searchValue =
                document
                .getElementById("searchInput")
                .value
                .toLowerCase()
                .trim();



            const rows =
                Array.from(
                    document.querySelectorAll(
                        "#employeeTable tbody tr"
                    )
                );



            return rows.filter(row => {


                return row.innerText
                    .toLowerCase()
                    .includes(searchValue);


            });


        }



        /* =========================
           DISPLAY TABLE
        ========================= */

        function displayTable() {


            const allRows =
                Array.from(
                    document.querySelectorAll(
                        "#employeeTable tbody tr"
                    )
                );



            const filteredRows =
                getFilteredRows();



            const totalPages =
                Math.max(
                    1,
                    Math.ceil(
                        filteredRows.length /
                        rowsPerPage
                    )
                );



            if (currentPage > totalPages) {

                currentPage = totalPages;

            }



            /* HIDE ALL ROWS */

            allRows.forEach(row => {

                row.style.display = "none";

            });



            /* CALCULATE ROW RANGE */

            const start =
                (currentPage - 1) *
                rowsPerPage;



            const end =
                start +
                rowsPerPage;



            /* SHOW CURRENT PAGE */

            filteredRows
                .slice(start, end)
                .forEach(row => {

                    row.style.display = "";

                });



            renderPagination(
                totalPages,
                filteredRows.length
            );


        }



        /* =========================
           RENDER PAGINATION
        ========================= */

        function renderPagination(
            totalPages,
            totalRows
        ) {


            const pageNumbers =
                document.getElementById(
                    "pageNumbers"
                );



            const paginationInfo =
                document.getElementById(
                    "paginationInfo"
                );



            const prevPage =
                document.getElementById(
                    "prevPage"
                );



            const nextPage =
                document.getElementById(
                    "nextPage"
                );



            pageNumbers.innerHTML = "";



            /* =========================
               NO USERS
            ========================= */

            if (totalRows === 0) {


                paginationInfo.textContent =
                    "No users found";


            }


            /* =========================
               USERS FOUND
            ========================= */
            else {


                const start =
                    (currentPage - 1) *
                    rowsPerPage + 1;



                const end =
                    Math.min(
                        currentPage *
                        rowsPerPage,
                        totalRows
                    );



                paginationInfo.textContent =
                    `Showing ${start}-${end} of ${totalRows} users`;


            }



            /* =========================
               PREVIOUS BUTTON
            ========================= */

            prevPage.disabled =
                currentPage === 1;



            /* =========================
               NEXT BUTTON
            ========================= */

            nextPage.disabled =
                currentPage === totalPages;



            /* =========================
               PAGE NUMBERS
            ========================= */

            for (
                let i = 1; i <= totalPages; i++
            ) {


                const button =
                    document.createElement(
                        "button"
                    );



                button.type = "button";


                button.textContent = i;



                if (i === currentPage) {

                    button.classList.add(
                        "active"
                    );

                }



                button.onclick = function() {


                    currentPage = i;


                    displayTable();


                };



                pageNumbers.appendChild(
                    button
                );


            }


        }



        /* =========================
           CHANGE PAGE
        ========================= */

        function changePage(direction) {


            const filteredRows =
                getFilteredRows();



            const totalPages =
                Math.max(
                    1,
                    Math.ceil(
                        filteredRows.length /
                        rowsPerPage
                    )
                );



            currentPage += direction;



            if (currentPage < 1) {

                currentPage = 1;

            }



            if (currentPage > totalPages) {

                currentPage = totalPages;

            }



            displayTable();


        }



        /* =========================
           SEARCH
        ========================= */

        function searchEmployee() {


            currentPage = 1;


            displayTable();


        }



        /* =========================
           INITIAL LOAD
        ========================= */

        displayTable();
    </script>


</body>

</html>