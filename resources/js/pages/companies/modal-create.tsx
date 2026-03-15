import { DialogClose, DialogContent, DialogDescription, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog"
import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"
import { Button } from '@/components/ui/button';
import { Textarea } from '@/components/ui/textarea';

export default function DialogCompanyCreate() {
  return (
    <DialogContent className="">
      <DialogHeader>
        <DialogTitle>Company registration information</DialogTitle>
        <DialogDescription>
          Add a new company
        </DialogDescription>
      </DialogHeader>
      <section className="p-4 space-y-4">
        <form  className="space-y-4" method="post">
          <Input id="input-demo-api-key" placeholder="nombre del producto" />
          <Textarea id="input-demo-api-key" placeholder="descripcion del producto"/>
          <Input id="input-demo-api-key" placeholder="stock del producto" />
          <Input id="input-demo-api-key" placeholder="precio del producto" />
        </form>
      </section>
      <DialogFooter className="sm:justify-start">
        <Button type="submit" className="btn btn-primary">Save</Button>
        <DialogClose asChild>
          <Button type="button">Close</Button>
        </DialogClose>
      </DialogFooter>
    </DialogContent>
  );
}


