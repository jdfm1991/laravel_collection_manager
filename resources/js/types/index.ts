export type * from './auth';
export type * from './navigation';
export type * from './ui';

export interface PageLinkItem {
    active: boolean;
    label: string;
    url: string;
};

export interface Filters {
  search: string;
  perPage: number;
  sortBy: string;
  sortDirection: string;
}