<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Titipin Store</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
        <style>
            @import "https://unpkg.com/open-props";
            @import "https://unpkg.com/open-props/normalize.min.css";

            .media-scroller {
            --_spacer: var(--size-3);
            display: grid;
            gap: var(--_spacer);
            grid-auto-flow: column;
            grid-auto-columns: 21%;

            padding: 0 var(--_spacer) var(--_spacer);

            overflow-x: auto;
            overscroll-behavior-inline: contain;
            }

            .media-scroller--with-groups {
            grid-auto-columns: 80%;
            }

            .media-group {
            display: grid;
            gap: var(--_spacer);
            grid-auto-flow: column;
            }

            .media-element {
            display: grid;
            grid-template-rows: min-content;
            background: #D9D9D9;
            border-radius: var(--radius-2);
            box-shadow: var(--shadow-2);
            }

            .media-element > img {
            inline-size: 100%;
            aspect-ratio: 16 / 9;
            object-fit: cover;
            }

            .snaps-inline {
            scroll-snap-type: inline mandatory;
            scroll-padding-inline: var(--_spacer, 1rem);
            }

            .snaps-inline > * {
            scroll-snap-align: start;
            }

            /* general styling */

            .container {
            inline-size: min(100% - 4rem, 70rem);
            margin-inline: auto;
            }

            .flow {
            display: grid;
            gap: var(--size-3);
            }

            .page-header {
            padding-block: var(--size-9);
            margin-block-end: var(--size-9);
            background: var(--gradient-16);
            color: var(--gray-0);
            box-shadow: var(--shadow-2);
            }

            .page-title {
            font-size: var(--font-size-fluid-3);
            }

            .page-subtitle {
            font-size: var(--font-size-fluid-1);
            }

            .section-title {
            padding-inline-start: var(--size-6);
            margin-block: var(--size-9) var(--size-3);
            }

            /* .rounded-4 {
                border-radius: var(--bs-border-radius-xl)!important;
                width: 300px;
                height: 100px;
                align-self: center;
            } */
        </style>
    </head>
    
    <body> 
    <!-- Header -->
    <header>
        <div class="px-3 py-2">
            <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
                <a class="nav-link d-inline-block me-auto" href="#" style="font-family:'Nunito';font-size:40px;color:#FC4C02;"><strong>TITIPIN</strong></a>
                <div class="d-flex align-items-center">
                    <div class="input-group w-50">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" style="background-color:#FC4C02;" type="submit"><img src="./assets/search.png" style="width: 32px;" /></button>
                    </div>
                    <button class="btn ms-3 d-inline-block" type="submit"><img src="./assets/heart.png" /></button>
                    <button class="btn me-auto d-inline-block" type="submit"><img src="./assets/basket.png" /></button> 
                    <button class="btn d-inline-block" type="submit" style="font-family:'Nunito';font-size:20px;color:#FC4C02;">Sign In</button> 
                    <button class="btn d-inline-block" type="submit" style="font-family:'Nunito';font-size:20px;color:#FC4C02;">Register</button> 
                </div>
            </div>
        </div>
    </header>

        <!-- Horizontal Scroll -->
        <section style="background-color: #AD3300;">
        </br>
        <div class="media-scroller snaps-inline">
        
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1641353989082-9b15fa661805?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODcyOA&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1642190672487-22bde32965f7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODcyOA&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1641841344411-49dbd02896f4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODcyOA&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1643223723262-7ce785730cf6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODcyOA&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1640938776314-4d303f8a1380?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc2Mw&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1641259041823-e09935369105?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc2Mw&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1642543492481-44e81e3914a7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc2Mw&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1641118961077-440391095cdc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc2Mw&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1640767014413-b7d27c58b058?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc5NQ&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1640948612546-3b9e29c23e98?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc5NQ&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1642484865851-111e68695d71?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc5NQ&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1642237778207-24985a0bf876?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc5NQ&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1642177584449-fa0b017dccc7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc5NQ&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1643249960396-d39d2a63ce8a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODg0Mw&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1641424222187-1c336d21804c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODg0OA&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1640998483268-d1faffa789ad?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODkwNA&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1642034451735-2a8df1eaa2c0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODg4OQ&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1640808238224-5520de93c939?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODg4OQ&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1643039952431-38adfa91f320?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODg0OA&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
            <div class="media-element">
                <img src="https://images.unsplash.com/photo-1643148636637-58b3eb95cdad?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODg0OA&ixlib=rb-1.2.1&q=80&w=400" alt="">
            </div>
        </div>
        </section>

    <!-- Custom Link Req
    <section class="box-custom">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border">
                <h6 class="fw mb-0" style="color: #FC4C02;">Custom Link Req</h6>
                <div class="form-floating mb-3">
                    <input type="url" class="form-control rounded-3" id="floatingInput" placeholder="add your own desire link to khilaf">
                </div>
            </div>
        </div> -->

    </section>

    <footer><?php include 'footer.php';?></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
    
</html>
