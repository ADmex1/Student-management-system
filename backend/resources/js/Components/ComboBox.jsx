import { PopoverContent, PopoverTrigger } from "@radix-ui/react-popover";
import { IconCaretDown, IconCheck } from "@tabler/icons-react";
import { Popover } from "antd";
import { useState } from "react";
import { cn } from "@/lib/utils";
import { Command } from "@components/ui/command";
import { CommandEmpty, CommandGroup, CommandInput, CommandItem, CommandList } from "./ui/command";

export default function ComboBox({ items, selectedItem, onSelect, placeHolder = "Select... " }) {
    const [open, setOpen] = useState(false);
    const handleSelect = (value) => {
        onSelect(value);
        setOpen(false);
    }
    return (
        < Popover open={open} onOpenChange={setOpen}>
            <PopoverTrigger asChild>
                <button
                    variant='outlined'
                    role='combobox'
                    aria-expanded={open}
                    className="justify-between w-full"
                    size='xl'
                >
                    {items.find((item) => item.label === (selectedItem)?.label ?? placeHolder)}
                    <IconCaretDown className=" ml-2 opacity-50 size-4 shrink-0" />
                </button>
            </PopoverTrigger>
            <PopoverContent className="max-h-[--radix-popover-content-available-height] w-[--radix-popover-content-available-width]p-0" align="start">
                <Command>
                    <CommandInput placeholder={placeHolder} className="h-9">
                        <CommandList>
                            <CommandEmpty>
                                Item Not Found!
                            </CommandEmpty>
                            <CommandGroup>
                                {items.map((item, index) => (
                                    <CommandItem key={index} value={item.value} onSelect={(value) => handleSelect(value)}>
                                        {item.label}
                                        <IconCheck
                                            className={cn(
                                                'ml-auto size-4',
                                                selectedItem == item.label ? 'opacity-100' : 'opacity-0'
                                            )}></IconCheck>
                                    </CommandItem>
                                ))}
                            </CommandGroup>
                        </CommandList>
                    </CommandInput>
                </Command>
            </PopoverContent>

        </Popover >
    )
}