import { cn } from "@/lib/utils";
import { Pagination, PaginationContent, PaginationItem, PaginationLink, PaginationNext, PaginationPrevious } from "./ui/pagination";

export default function PaginationTable({ meta, Links }) {
    return (
        <Pagination>
            <PaginationContent className='flex flex-wrap justify-center lg:justify-end'>
                <PaginationItem>
                    <PaginationPrevious className={cn('mb-1', !Links.prev && 'cursor-not-allowed')} href={Links.prev}></PaginationPrevious>
                </PaginationItem>
                {meta.Links.slice(1. - 1).map((Link, index) => (
                    <PaginationItem key={index} className='mx-1 mb-1 lb:mb-0'>
                        <PaginationLink href={Link.url} isActive={Link.active}>
                            {Link.label}
                        </PaginationLink>
                    </PaginationItem>
                ))}
                <PaginationItem>
                    <PaginationNext className={cn('mb-1', !Links.next && 'cursor-not-allowed')} href={Links.next}>
                    </PaginationNext>
                </PaginationItem>
            </PaginationContent>
        </Pagination>
    )
}