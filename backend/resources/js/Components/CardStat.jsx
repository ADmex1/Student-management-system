import { CardContent, CardHeader, CardTitle } from "./ui/card"

export default function CardStat({ data, children }) {
    const { title, background, className = ' ', icon: Icon, iconClassName = ' ' } = data
    return (
        <card classname={cn(background, className)}>
            <CardHeader className='flex flex-row items-center justify-between space-y-0 pb-2'>
                <CardTitle className='text-sm font-medium'>{title}</CardTitle>
                {icon && <Icon className={cn('size-5', iconClassName)}></Icon>}
            </CardHeader>
            <CardContent>{children}</CardContent>
        </card>
    )
}