import { Avatar, AvatarFallback } from "@/Components/ui/avatar";
import { Toaster } from "@/Components/ui/sonner";
import { flashMessage } from "@/lib/utils";
import { Dialog, Transition } from "@headlessui/react";
import { Head, Link, usePage } from "@inertiajs/react";
import { IconLayoutSidebar, IconX } from "@tabler/icons-react";
import { Fragment, useEffect, useState } from "react"
import { toast } from "sonner";

export default function AppLayout({ title, children }) {
    const [sideBarOpen, setSidebarOpen] = useState(false);
    const flash = flashMessage(usePage());
    useEffect(() => {
        if (flash && flash.message && flash.type === 'warning') toast[flash.type](flash.message)
    }, [flash])
    return (

        <>
            <Head title={title} />
            <Toaster position="top-right" richColors />
            <div>
                <Transition.Root show={sideBarOpen} as={Fragment}>
                    <Dialog as='div' className='relative z-50 lg:hidden' onClose={setSidebarOpen}>
                        <Transition.Child as={Fragment} enter="transition-opacity ease-linear duration-300" enterFrom="opacity-0" enterTo="opacity-100" leave="transition-opacity ease linear duration-300" leaveFrom="opacity-100" leaveTo="opacity-0">
                            <div className="fixed inset-0 bg-gray-900/80">
                            </div>
                        </Transition.Child >
                        <div className="fixed inset-0 flex min-w-0">
                            <Transition.Child as={Fragment} enter="transition ease-in-out duration-300 transform" enterFrom="-translate-x-full" enterTo="translate-x-0" leave="transition ease-in-out duration-300 transform" leaveFrom="translate-x-0" leaveTo="-translate-x-full">
                                <Dialog.Panel className="relative flex w-full max-w-xs mr-16">
                                    <Transition.Child as={Fragment} enter="transition ease-in-out duration-300" enterFrom="opacity-0" enterTo="opacity-100" leave="ease-in-out duration-300" leaveTo="opacity-0">
                                        <div className="absolute top-0 flex justify-center w-16 pt-5 left-full">
                                            <button type="button" className="-m-2.5 p-2.5" onClick={() => setSidebarOpen(false)}>
                                                <IconX className="size-6 text-white" />
                                            </button>

                                        </div>
                                    </Transition.Child>
                                    <div className="flex flex-col px-6 pb-2 overflow-y-auto grow gap-y-5 bg-gradient-to-b  from-blue-500 via-blue-600 to-blue-700">
                                        {/* sidebar responsive */}
                                    </div>
                                </Dialog.Panel>
                            </Transition.Child>

                        </div>
                    </Dialog>
                </Transition.Root>
                <div className="hidden p-2.5 lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col lg:min-w-72">
                    <div className="flex flex-col px-4 overflow-y-auto border grow gap-y-5 rounded-xl bg-gradient-to-b from-blue-500 via-blue-600 to-blue-700">
                        {/* sidebar */}
                    </div>
                </div>
                <div className="sticky top-0 z-40 flex items-center p-4 bg-white shadow-sm gap-x-6 sm:px-6 lg:hidden overflow-hidden">
                    <button type="button" className="-m-2.5 p-2.5 text-gray-700 lg:hidden" onClick={() => setSidebarOpen(true)}>
                        <IconLayoutSidebar className="size-6" />
                    </button>
                    <div className="flex-1 text-sm font-semibold leading-6 text-foreground">
                        {title}
                    </div>
                    <Link href="#">
                        <Avatar>
                            <AvatarFallback>X</AvatarFallback>
                        </Avatar>
                    </Link>
                </div>
                <main className="py-4 lg:pl-72 lg:pr-8 min-w-0">
                    <div className="px-4 max-w-screen-xl mx-auto">
                        {children}
                    </div>
                </main>
            </div>
        </>
    )
}