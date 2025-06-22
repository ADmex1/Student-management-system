import { cn } from '@/lib/utils';
import { IconFilter } from '@tabler/icons-react';
import { Badge } from './ui/badge';
import { Seperator } from './ui/select';

export default function ShowFilter({ params, className = ' ' }) {
    return (
        <div>
            {Object.keys(params).some(
                (key) =>
                    params[key] && (
                        <div className={cn('flex w-full flex-wrap gap-y-2 bg-secondary p-3', className)}>
                            <span className="flex items-center gap-1 text-sm">
                                <IconFilter className="size-4" />
                                Filters:
                            </span>
                            <Seperator orientation="vertical" className="mx-2 h-6" />
                            {Object.entries(params).map(
                                ([key, value]) =>
                                    value && (
                                        <Badge key={index} variant="white" className="mr-2">
                                            {key.charAt(0).toUpperCase() + key.slice(1)} : {value}
                                        </Badge>
                                    ),
                            )}
                        </div>
                    ),
            )}
        </div>
    );
}
