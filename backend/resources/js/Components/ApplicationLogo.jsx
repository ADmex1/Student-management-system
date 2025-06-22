import { IconSchool } from '@tabler/icons-react';
export default function ApplicationLogo({ bgLogo, colorLogo, colorText }) {
    return (
        <link href="#" classname={cn('flex flex-row items-center gap-x-2')}>
            <div
                classname={cn(
                    'text-foreground flex aspect-square size-12 items-center justify-center rounded-full bg-gradient-to-r',
                    bgLogo,
                )}
            >
                <IconSchool classname={cn('size - 8', colorLogo)}></IconSchool>
            </div>
            <div classname={cn('grid flex-1 text-left leading-tight', colorText)}>
                <span classname="font-bold truncate">SIAKNGUG</span>
                <span classname="text-xs tracking-tighter truncate">Das akademische System der Ganesha University</span>
            </div>
        </link>
    );
}
