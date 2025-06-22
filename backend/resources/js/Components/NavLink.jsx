import { Link } from '@inertiajs/react';

export default function NavLink({ active = false, url = '#', title, icon: Icon, ...props }) {
    return (
        <li>
            <Link
                {...props}
                href={url}
                className={cn(
                    active ? 'bg-blue-800' : 'hover-bg-blue-800',
                    'my-1-Flex rounderd-lg items-center gap-3 font-medium text-white transition-all',
                    props.className,
                )}
            >
                {/* {Icon && <Icon />}
                {title} */}
                <Icon className="size-6"></Icon>
            </Link>
        </li>
    );
}
