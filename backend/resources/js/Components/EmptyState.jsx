export default function EmptyState({ title = 'No Data', subtitle = 'Start with adding Data', icon: Icon }) {
    return (
        <div className="flex flex-col items-center border border-dashed border-secondary p-4">
            <Icon className="size-12 text-blue-600" />
            <h3 className="mt-2 text-lg font-semibold text-foreground">{title}</h3>
            <p className="mt-1 text-sm text-muted-foreground">{subtitle}</p>
        </div>
    );
}
