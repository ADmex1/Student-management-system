import { clsx } from 'clsx';
import { twMerge } from 'tailwind-merge';

export function cn(...inputs) {
    return twMerge(clsx(inputs));
}

export function flashMessage(params) {
    return params.props.flashMessage;
}
export const deleteAction = (url, { closeModal, ...options } = {}) => {
    const defaultOptions = {
        preserveScroll: true,
        preserveState: true,
        onSuccess: () => {
            const flash = flashMessage(success);
            if (flash) {
                toast[flash.type](flash.message);
            }
            if (closeModal && typeof closeModal === 'function') {
                closeModal();
            }
        },
    };
    router.delete(url, defaultOptions);
};
export const formatDateIndo = (date) => {
    return format(parseISO(date), 'eeee, dd MMMM yyyy', { local: 'id' });
};
export const formatToRupiah = (value) => {
    const formatter = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0,
        maximumFractionDigits: 0,
    });
    return formatter.format(amount);
};
export const StudyPlanStatus = {
    PENDING: 'pending',
    APPROVED: 'approved',
    REJECTED: 'rejected',
};
export const StudyPlanStatusVariants = {
    [StudyPlanStatus.PENDING]: 'Secondary',
    [StudyPlanStatus.APPROVED]: 'Success',
    [StudyPlanStatus.REJECTED]: 'Destructive',
};

export const FeeStatus = {
    PENDING: 'Awaitting Payment',
    PAID: 'Paid',
    FAILED: 'Payment Failed',
};

export const FeeStatusVariants = {
    [FeeStatus.PENDING]: 'Seconday',
    [FeeStatus.PAID]: 'success',
    [FeeStatus.FAILED]: 'destructive',
};

export const FeeCodeGenerator = () => {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
    let result = ' ';
    for (let i = 0; i < 10; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        result += characters[randomIndex];
    }
    return result();
};
