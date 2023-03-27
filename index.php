<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body class=" font-['CabinetGrotesk-Regular'] font-normal text-sm leading-4 text-[#949e9e] bg-[#fafafa]">
<div class="min-w-[320px] flex items-center w-full h-[600px] md:h-screen md:p-20 p-5 bg-[url('../images/login-bg.jpg')] bg-cover bg-center ">
            <div class="w-full max-w-4xl mx-auto">
                <h1 class="text-center text-4xl leading-[2.813rem] tracking-wider  text-white-gray mb-4 font-black">Registration Form</h1>
                <form action="process-registration.php" method="post">
                    <div class="mt-6 grid grid-cols-2 gap-6 w-full">
                        <div>
                            <label class="label" for="first-name">First Name</label>
                            <div class="form-wrap">
                                <div class="icon text-[#98BEC0]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <input type="text" id="first-name" name="first-name" required class="form-control md:h-14.8" placeholder="Enter your First Name">
                            </div>
                        </div>
                        <div>
                            <label class="label" for="last-name">Last Name</label>
                            <div class="form-wrap">
                                <div class="icon text-[#98BEC0]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <input type="text" id="last-name" name="last-name" required class="form-control md:h-14.8" placeholder="Enter your Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 grid grid-cols-2 gap-6 w-full">
                        <div class="col-span-2">
                            <label class="label" for="email">Email Address</label>
                            <div class="form-wrap">
                                <div class="icon ">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.939 3C18.28 3 19.57 3.53 20.519 4.481C21.469 5.43 22 6.71 22 8.05V15.95C22 18.74 19.73 21 16.939 21H7.06C4.269 21 2 18.74 2 15.95V8.05C2 5.26 4.259 3 7.06 3H16.939ZM18.53 9.54L18.61 9.46C18.849 9.17 18.849 8.75 18.599 8.46C18.46 8.311 18.269 8.22 18.07 8.2C17.86 8.189 17.66 8.26 17.509 8.4L13 12C12.42 12.481 11.589 12.481 11 12L6.5 8.4C6.189 8.17 5.759 8.2 5.5 8.47C5.23 8.74 5.2 9.17 5.429 9.47L5.56 9.6L10.11 13.15C10.67 13.59 11.349 13.83 12.06 13.83C12.769 13.83 13.46 13.59 14.019 13.15L18.53 9.54Z" fill="#98BEC0"/>
                                    </svg>
                                </div>
                                <input type="email" class="form-control md:h-14.8" placeholder="Enter your Email" id="email" name="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 grid grid-cols-2 gap-6 w-full">
                        <div>
                            <label class="label" for="password">Password</label>
                            <div class="form-wrap">
                                <div class="icon">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5227 7.39601V8.92935C19.2451 9.46696 20.5 11.0261 20.5 12.8884V17.8253C20.5 20.1308 18.5886 22 16.2322 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8253V12.8884C3.5 11.0261 4.75595 9.46696 6.47729 8.92935V7.39601C6.48745 4.41479 8.95667 2 11.9848 2C15.0535 2 17.5227 4.41479 17.5227 7.39601ZM12.0051 3.73904C14.0678 3.73904 15.7445 5.37871 15.7445 7.39601V8.7137H8.25553V7.37613C8.26569 5.36878 9.94232 3.73904 12.0051 3.73904ZM12.8891 16.4549C12.8891 16.9419 12.4928 17.3294 11.9949 17.3294C11.5072 17.3294 11.1109 16.9419 11.1109 16.4549V14.2488C11.1109 13.7718 11.5072 13.3843 11.9949 13.3843C12.4928 13.3843 12.8891 13.7718 12.8891 14.2488V16.4549Z" fill="#98BEC0"/>
                                    </svg>
                                </div>
                                <input type="password" class="form-control md:h-14.8" placeholder="Enter your Password" id="password" name="password" required>
                            </div>
                        </div>
                        <div>
                            <label class="label" for="confirm-password">Confirm Password</label>
                            <div class="form-wrap">
                                <div class="icon">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5227 7.39601V8.92935C19.2451 9.46696 20.5 11.0261 20.5 12.8884V17.8253C20.5 20.1308 18.5886 22 16.2322 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8253V12.8884C3.5 11.0261 4.75595 9.46696 6.47729 8.92935V7.39601C6.48745 4.41479 8.95667 2 11.9848 2C15.0535 2 17.5227 4.41479 17.5227 7.39601ZM12.0051 3.73904C14.0678 3.73904 15.7445 5.37871 15.7445 7.39601V8.7137H8.25553V7.37613C8.26569 5.36878 9.94232 3.73904 12.0051 3.73904ZM12.8891 16.4549C12.8891 16.9419 12.4928 17.3294 11.9949 17.3294C11.5072 17.3294 11.1109 16.9419 11.1109 16.4549V14.2488C11.1109 13.7718 11.5072 13.3843 11.9949 13.3843C12.4928 13.3843 12.8891 13.7718 12.8891 14.2488V16.4549Z" fill="#98BEC0"/>
                                    </svg>
                                </div>
                                <input type="password" class="form-control md:h-14.8" placeholder="Enter your Password" id="confirm-password" name="confirm-password" required>
                            </div>
                        </div>
                    </div>
                    <button class=" mt-8 w-full bg-[#0B646B] rounded-2xl h-14.8 text-xl leading-6.1 tracking-wide-3 uppercase text-sparking transition-all duration-500 hover:bg-[#08464b] hover:text-gray-400" type="submit">Register</button>
                </form>
                <div class="link-wrap mt-8 border-t-[0.75px] border-separator border-solid rotate-[-0.13deg] flex items-center justify-center pt-6">
                    <p class="text-sm">Dont have an account?</p>
                    <a href="login.php" class="ml-2 text-base tracking-wide-1 underline uppercase text-[#FFFFFF] bg-transparent font-bold">Login</a>
                </div>
            </div>
        </div>
</body>
</html>