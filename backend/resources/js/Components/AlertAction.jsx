import { AlertDialog, AlertDialogAction, AlertDialogContent, AlertDialogDescription, AlertDialogTrigger } from "@radix-ui/react-alert-dialog";
import { AlertDialogFooter, AlertDialogHeader } from "./ui/alert-dialog";
import { A } from "bootstrap/ssr/assets/ApplicationLogo-xMpxFOcX";

export default function AlertAction({
    trigger,
    action,
    title = ' You sure? ',
    description = 'This action will delete the Data permanently'
}) {
    <AlertDialog>
        <AlertDialogTrigger>
            asChild={trigger}
        </AlertDialogTrigger>
        <AlertDialogContent>
            <AlertDialogHeader>
                <AlertDialogTitle>
                    {title}
                </AlertDialogTitle>
                <AlertDialogDescription>
                    {description}
                </AlertDialogDescription>
            </AlertDialogHeader>
            <AlertDialogFooter>
                <AlertDialogCancel>
                    Cancel
                </AlertDialogCancel>
                <AlertDialogAction onClick={action}>
                    Continue
                </AlertDialogAction>
            </AlertDialogFooter>
        </AlertDialogContent>
    </AlertDialog>
}