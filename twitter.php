<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.17.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <style>
        .roboto {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="w-[80rem] m-auto overflow-x-hidden">
    <div class="flex flex-row ">
        <div class="roboto font-bold border-r-2 pr-4 text-md basis-[30rem] ">
            <div class="sticky top-0 ">
                <div class="grid justify-center ">
                    <ul class="menu bg-base-100">
                        <li>
                            <a href="#">
                                <svg viewbox="0 0 24 24" aria-hidden="true" class="h-7">
                                    <g>
                                        <path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a>
                                <i class="fa fa-home text-xl align-middle" aria-hidden="true"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a>
                                <i class="fa fa-hashtag text-xl align-middle" aria-hidden="true"></i>
                                Explorer
                            </a>
                        </li>
                        <li>
                            <a>
                                <div class="indicator">
                                    <span class="indicator-item f badge badge-secondary"></span>
                                    <i class="fa fa-bell text-xl" aria-hidden="true"></i>
                                </div>
                                Notification
                            </a>
                        </li>
                        <li>
                            <a>
                                <i class="fa fa-envelope text-xl" aria-hidden="true"></i>
                                Message
                            </a>
                        </li>
                        <li class="text-center">
                            <a>
                                <i class="fa fa-bookmark text-xl" aria-hidden="true"></i>
                                Bookmark
                            </a>
                        </li>
                        <li class="text-center">
                            <a>
                                <i class="fa fa-list" aria-hidden="true"></i>
                                Lists
                            </a>
                        </li>
                        <li class="text-center">
                            <a>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                Profile
                            </a>
                        </li>
                        <li class="text-center">
                            <a>
                                <i class="fa fa-ellipsis-h " aria-hidden="true"></i>
                                More
                            </a>
                        </li>
                    </ul>
                    <button class="btn btn-info  w-full rounded-full  normal-case text-white">Tweet</button>
                    <div class="mt-12 bottom-5 left-14">
                        <div class="dropdown dropdown-top w-48 sticky">
                            <label tabindex="0" class="btn btn-outline m-1 rounded-full">
                                <div class="grid grid-cols-3 gap-0">
                                    <div>
                                        <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                                    </div>
                                    <div class="colspan-2 normal-case">
                                        Bambang
                                        <br>
                                        <span class="text-xs text-secondary">@bambang</span>
                                    </div>

                                </div>
                            </label>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li>
                                    <a>Item 1</a>
                                </li>
                                <li>
                                    <a>Item 2</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-2 py-3 ">
            <div class="flex flex-row">
                <div class="basis-1/6 text-center self-center">
                    <i class="fa fa-arrow-left text-xl" aria-hidden="true"></i>
                </div>
                <div class="basis-1/3">
                    <span class="font-bold">Bambang</span>
                    <br>
                    127 Tweets
                </div>
            </div>
            <div class="py-2 relative" id="infoAccountWrapper">
                <img src="https://placeimg.com/598/199/nature" class="w-full">
                <img src="https://placeimg.com/133/133/animals" class="rounded-full -mt-20 ml-4 shadow-lg shadow-black-200 ">
                <div class="grid grid-cols-3 -mt-10">
                    <div></div>
                    <div></div>
                    <div class="text-right pr-4">
                        <button class="btn btn-sm btn-outline rounded-full normal-case">
                            Edit Profile
                        </button>
                    </div>
                </div>
                <div class="p-3 text-slate-500">
                    <div id="accountDataWrapper">
                        <div class="font-bold text-lg text-neutral-focus">Bambang</div>
                        <div>@bambang_</div>
                    </div>
                    <div id="bioDataWrapper" class="my-2">
                        <small class="text-sm text-black">Simple small thing to do</small>
                        <br>
                        <small class="text-sm">
                            <i class="fa fa-calendar mr-2" aria-hidden="true"></i>
                            Joined March 2021
                        </small>
                    </div>
                    <div id="followerDataWrapper" class="text-sm">
                        <small class="mx-1">
                            <span class="font-bold text-black">14</span>
                            Following
                        </small>
                        <small class="mx-1">
                            <span class="font-bold text-black">0</span>
                            Follower
                        </small>
                    </div>
                </div>
            </div>
            <div class="tabs grid grid-flow-col">
                <a class="tab tab-bordered border-b-3 border-blue-400">
                    <span class="font-bold text-black">Tweets</span>
                </a>
                <a class="tab tab-bordered">Tweets & Replies</a>
                <a class="tab tab-bordered">Media</a>
                <a class="tab tab-bordered">Likes</a>
            </div>
            <div>
                <?php $data = 100; ?>
                <?php for ($i = 0; $i < $data; $i++) { ?>
                    <div class="flex justify-between p-3 border-b-2">
                        <div class="basis-24">
                            <img src="https://placeimg.com/48/48/animals" class="rounded-full ">
                        </div>
                        <div class="px-2">
                            <div class="">
                                <span class="font-bold">
                                    Bambang
                                </span>
                                <span class="text-gray-400">
                                    @bambang_
                                    <span class="mx-1 font-bold">·</span>
                                    13h
                                </span>
                            </div>
                            Good numbers! <br>
                            At some point in my blogging career, I switched my focus from clicks/impressions, to actually
                            what does it convert to.
                            <div class="flex justify-between  text-gray-500 py-4 w-auto">

                                <div><i class="fa fa-comment-o" aria-hidden="true"></i></div>
                                <div><i class="fa fa-retweet" aria-hidden="true"></i> 2 </div>
                                <div><i class="fa fa-heart text-red-500" aria-hidden="true"></i></div>
                                <div><i class="fa fa-share" aria-hidden="true"></i></div>
                            </div>
                        </div>
                        <div>
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </div>
                    </div>
                <?php  } ?>

            </div>
        </div>
        <div class="border-l pr-10 pl-4 basis-[36rem]  ">
            <div class="input-group rounded-full border-2 focus:border-blue-500 hover:border-blue-500">
                <div class="ml-5 rounded-full  self-center">
                    <i class="fa fa-search  rounded-full" aria-hidden="true"></i>
                </div>
                <div class="rounded-full">
                    <input type="text" class="w-full input  focus:outline-none" placeholder="Search Twitter">
                </div>
            </div>
            <div class="grid grid-cols-3 rounded-xl my-4" style="overflow: hidden">
                <img src="https://placeimg.com/114/98/any">
                <img src="https://placeimg.com/114/98/animals">
                <img src="https://placeimg.com/114/98/nature">
                <img src="https://placeimg.com/114/98/grayscale">
                <img src="https://placeimg.com/114/98/tech">
                <img src="https://placeimg.com/114/98/arch">
            </div>
            <div class="rounded-xl border-2 p-3">
                <h5 class="text-lg normal-case font-bold ">You might like</h5>
                <div class="mt-4">
                    <div class="flex gap-3 my-2">
                        <div class="self-center basis-1/1">
                            <img src="https://placeimg.com/48/48/any" class="rounded-full shadow-lg shadow-black-200 ">
                        </div>
                        <div class="self-center basis-1/2">
                            <span class="font-bold">WholesomeMemes</span>
                            @wholesomemes
                        </div>
                        <div class="self-center basis-1/1">
                            <button class="btn btn-info btn-sm rounded-full text-white normal-case">
                                Follow
                            </button>
                        </div>
                    </div>
                    <div class="flex gap-3 my-2">
                        <div class="self-center basis-1/1">
                            <img src="https://placeimg.com/48/48/tech" class="rounded-full shadow-lg shadow-black-200 ">
                        </div>
                        <div class="self-center basis-1/2">
                            <span class="font-bold">TailwindCSS</span>
                            @tailwindcss
                        </div>
                        <div class="self-center basis-1/1">
                            <button class="btn btn-info btn-sm rounded-full text-white normal-case">
                                Follow
                            </button>
                        </div>
                    </div>

                    <div class="normal-case mt-5 text-blue-500">
                        Show more
                    </div>


                </div>
            </div>

            <div class="sticky -top-24">
                <div class="rounded-xl border-2 p-3 mt-4  bg-white">
                    <h5 class="text-lg normal-case font-bold ">Trends for you</h5>
                    <ul>
                        <li class="my-3">
                            <div class="flex justify-between">
                                <div>
                                    <small class="text-xs text-gray-500">Trending in Indonesia</small>
                                    <div class="font-bold">Laracon EU2022</div>
                                    <small class="text-xs text-gray-500">3.500 Tweets</small>
                                </div>
                                <div class="grid  ">
                                    <div class="self-center">
                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="my-3 ">
                            <div class="flex justify-between">
                                <div>
                                    <small class="text-xs text-gray-500">Trending in Indonesia</small>
                                    <div class="font-bold">TailwindCSS</div>
                                    <small class="text-xs text-gray-500">1.500 Tweets</small>
                                </div>
                                <div class="grid">
                                    <div class="self-center">
                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="my-3">
                            <div class="flex justify-between ">
                                <div>
                                    <small class="text-xs text-gray-500">Trending in Indonesia</small>
                                    <div class="font-bold">Penalty</div>
                                    <small class="text-xs text-gray-500">1.200 Tweets</small>
                                </div>
                                <div class="grid">
                                    <div class="self-center">
                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="normal-case mt-5 text-blue-500">
                        Show more
                    </div>
                </div>

                <div class="my-2 text-gray-500 text-sm mx-3 ">
                    <span class="mr-1">Terms of Service
                    </span>
                    <span class="mr-1">Privacy and Policy
                    </span>
                    <span class="mr-1">Cookie Policy
                    </span>
                    <span class="mr-1">Accesbility
                    </span>
                    <span class="mr-1">Ads Info
                    </span>
                    <span class="mr-1">More
                    </span>
                    <span class="mr-1">
                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
        </div>

    </div>
</body>

</html>