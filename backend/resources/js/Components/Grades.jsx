import { Button } from "antd";
import { Sheet, SheetContent, SheetDescription, SheetHeader, SheetTrigger } from "./ui/sheet";
import { IconEye } from "@tabler/icons-react";
import { Table, TableCell, TableFooter, TableHead, TableHeader, TableRow } from "./ui/table";

export default function Grades({ studyResult, grades, name = null }) {
    return (
        <Sheet>
            <SheetTrigger asChild>
                <Button variant="blue" size="sm">
                    <IconEye className="text-white size-4" />
                </Button>
            </SheetTrigger>
            <SheetContent side='bottom'>
                <SheetHeader>Study Result Details: {name}</SheetHeader>
                <SheetDescription>Details Study Result</SheetDescription>
            </SheetContent>
            <Table className='w-full border'>
                <TableHeader>
                    <TableRow>
                        <TableHead className='border'>No</TableHead>
                        <TableHead className='border'>Code</TableHead>
                        <TableHead className='border'>Subject</TableHead>
                        <TableHead className='border'>Credit</TableHead>
                        <TableHead className='border'>Letter</TableHead>
                        <TableHead className='border'>Weight</TableHead>
                        <TableHead className='border'>Grade</TableHead>
                    </TableRow>
                </TableHeader>
                <TableBody>
                    {grades.map((grade, index) => (
                        <TableRow key={index}>
                            <TableCell className='border'>{index + 1}</TableCell>
                            <TableCell className='border'>{grade.course.code}</TableCell>
                            <TableCell className='border'>{grade.course.name}</TableCell>
                            <TableCell className='border'>{grade.course.credit}</TableCell>
                            <TableCell className='border'>{grade.course.letter}</TableCell>
                            <TableCell className='border'>{grade.course.weight_of_value}</TableCell>
                            <TableCell className='border'>{grade.course.grade}</TableCell>
                        </TableRow>
                    ))}
                </TableBody>
                <TableFooter className='font-bold'>
                    <TableRow>
                        <TableCell colSpan='3'> IP Semeseter</TableCell>
                        <TableCell className='border'>{studyResult.gpa}</TableCell>
                        <TableCell className='border'></TableCell>
                        <TableCell className='border'></TableCell>
                    </TableRow>
                </TableFooter>
            </Table>
        </Sheet>
    )
}