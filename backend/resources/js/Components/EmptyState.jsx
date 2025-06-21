
export default function EmptyState({ title = "No Data", subtitle = "Start with adding Data", icon: Icon, }) {
    return (
        <div className="flex flex-col items-center p-4 border border-dashed border-secondary">
            <Icon className="text-blue-600  size-12" />
            <h3 className="mt-2 text-lg font-semibold text-foreground">{title}</h3>
            <p className="mt-1 text-sm text-muted-foreground">{subtitle}</p>
        </div>
    )
}