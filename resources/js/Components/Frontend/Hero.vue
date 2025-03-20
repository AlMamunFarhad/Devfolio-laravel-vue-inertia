<template>
    <section
        id="home"
        class="lg:h-[85vh] flex items-center bg-light-primary dark:bg-dark-primary py-32 lg:py-0 overflow-hidden"
    >
        <div class="container mx-auto h-full" v-motion-fade-visible>
            <div class="flex flex-col md:flex-row items-center h-full pt-8">
                <div class="flex-1 flex flex-col items-center lg:items-start">
                    <p class="text-lg text-accent text-md mb-[22px]">
                        Hey, I'm Farhad! 👋
                    </p>
                    <h1
                        class="text-4xl leading-[44px] md:text-5xl md:leading-tight lg:text-7xl lg:leading-[1.2] font-bold md:tracking-[-2px]"
                    >
                        I Build & Design <br />
                        Web Applications
                    </h1>
                    <p
                        class="pt-4 pb-8 md:pt-12 md:pb-12 max-w-[480px] text-lg text-center lg:text-left"
                    >
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Esse, aliquam.
                    </p>
                    <button
                        class="btn btn-md bg-accent hover:bg-light-secondary hover:text-light-tail-500 dark:hover:bg-dark-secondary dark:hover:text-dark-navy-100 md:btn-lg transition-all"
                    >
                        Work with me
                    </button>
                    <div class="pt-12">
                        <h5
                            class="text-lg flex items-center justify-center lg:justify-start text-black dark:text-white mb-2"
                        >
                            Follow me on
                        </h5>
                        <div class="flex items-center mb-6">
                            <a
                                target="_blank"
                                href="https://www.facebook.com/farhad.mikky"
                                class="flex w-12 h-12 me-4 rounded-full items-center justify-center border border-white dark:border-white text-white dark:text-white hover:bg-light-secondary bg-light-primary hover:border-light-secondary dark:hover:bg-light-secondary dark:hover:border-secondary"
                            >
                                <svg
                                    enable-background="new 0 0 56.693 56.693"
                                    height="20px"
                                    id="Layer_1"
                                    version="1.1"
                                    viewBox="0 0 56.693 56.693"
                                    width="20px"
                                    xml:space="preserve"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                >
                                    <path
                                        d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"
                                    />
                                </svg>
                            </a>
                            <a
                                target="_blank"
                                href="https://x.com/FarhadAlMamun11"
                                class="flex w-12 h-12 me-4 rounded-full items-center justify-center border border-white text-black bg-light-primary hover:bg-light-secondary hover:border-light-secondary dark:hover:bg-light-secondary dark:hover:border-secondary"
                            >
                                <svg
                                    enable-background="new 0 0 56.693 56.693"
                                    height="20px"
                                    id="Layer_1"
                                    version="1.1"
                                    viewBox="0 0 56.693 56.693"
                                    width="20px"
                                    xml:space="preserve"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                >
                                    <path
                                        d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454  c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303  c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412  c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91  c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019  c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541  c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z"
                                    />
                                </svg>
                            </a>
                            <a
                                target="_blank"
                                href="https://www.linkedin.com/in/al-mamun-farahd-327b80258/"
                                class="flex w-12 h-12 me-4 rounded-full items-center justify-center border border-white text-black bg-light-primary  hover:bg-light-secondary hover:border-light-secondary dark:hover:bg-light-secondary dark:hover:border-secondary"
                            >
                                <svg
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20px"
                                    height="20px"
                                >
                                    <g>
                                        <path d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"
                                            fill-rule="nonzero"
                                        />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-1 justify-end items-center h-full mt-8 md:mt-0"
                >
                    <img
                        src="https://images.unsplash.com/photo-1713947503689-d5e1d303bb4a?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="w-full lg:w-[82%] rounded-2xl"
                        alt="Farhad"
                    />
                </div>
            </div>
        </div>
    </section>
</template>

<script setup></script>
