import { Link } from '@inertiajs/react';

export default function NavigationMenu({ active = false, url = '#', title, ...props }) {
    return (
        <Link
            {...props}
            href={url}
            className={cn(
                active ? 'bg-blue-500 text-white' : 'text-white hover:bg-blue-500',
                'tex-base rounded-md px-3 py-2 font-medium',
            )}
        >
            {title}
        </Link>
    );
}
